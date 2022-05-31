<?php
    session_start();
    if(!isset($_SESSION['todo'])) {
        $_SESSION['todo'] = array();
    }
    // if(!isset($_SESSION['incomplete'])) {
    //     $_SESSION['incomplete'] = array();
    // }
    if(!isset($_SESSION['completed'])) {
        $_SESSION['completed'] = array();
    }
?>
<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        $(document).ready(function(){   

            var id1;
            var idCompleted;

            function displayTodo(Tasks) {
               
               incomplete = JSON.parse(Tasks);
             
            //    console.log("Incomp: "+incomplete);
            //    console.log(incomplete.length);
               if(incomplete.length > 0){
                  text = "";
                
                  for(let i=0 ; i<incomplete.length ; i++){
                  text += '<li id='+i+'><input type="checkbox" class="check"><label>'+incomplete[i]+'</label><button class="edit">Edit</button><button class="delete">Delete</button></li>';
               };

                 $('#incomplete-tasks').html(text);    
               }
               else {
                 $('#incomplete-tasks').html("");
               }
            }

            function displayCompleted(Tasks) {
                completed = JSON.parse(Tasks);

                // console.log("Comp: "+completed);
                // console.log(completed.length);
                if(completed.length > 0) {
                    text = "";
                   
                    for(let i=0 ; i<completed.length ; i++){
                    text += '<li id='+i+'><input type="checkbox" class="check" checked><label>'+completed[i]+'</label><button class="edit">Edit</button><button class="delete">Delete</button></li>';
                    };
                   
                    $('#completed-tasks').html(text);     
                }
                else {
                    $('#completed-tasks').html("");
                }
            }

            $('.addTasks').on('click','.add',function(){
                let task = $('#new-task').val();
                $('#new-task').val("");
                $.ajax({
                    url:'server.php',
                    type:'POST',
                    data:{'task':task},
                    success:function(Tasks){
                            displayTodo(Tasks);
                    }
                });
            });

            $('#incomplete-tasks').on('click', '.edit', function(){
                id1 = $(this).parent()[0].id;
               
                let task = $(this).parent().children().eq(1).text();
                $('#new-task').val(task);
                // alert(task);
                $('.add').css({"display":"none"});
                $('.update').css({"display":"block"});
            });   
            
            $('.addTasks').on('click','.update',function(){
               
                updatedTask = $('#new-task').val();
                
                $('#new-task').val("");
                $.ajax({
                    url:'server.php',
                    type:'POST',
                    data:{'ID':id1, 'updateData':updatedTask },
                    success:function(UpdatedTask){
                            displayTodo(UpdatedTask);
                    }
                    });
                $('.add').css({"display":"block"});
                $(".update").css({"display":"none"});
                    
            });
             

            $('#incomplete-tasks').on('click', '.check', function(){
                text1 = "";
                id2 = $(this).parent()[0].id;
                $.ajax({
                    url:'server.php',
                    type:'POST',
                    data:{'id2':id2},
                    success:function(result) {
                            $.ajax({
                              url:'server.php',
                              type:'POST',
                              data:{'id1':id2},
                              success:function(Tasks){
                                    displayTodo(Tasks);
                            }
                        });
                        displayCompleted(result);
                    }        
                });
                // $.ajax({
                //     url:'server.php',
                //     type:'POST',
                //     data:{'id1':id2},
                //     success:function(Tasks){
                //             displayTodo(Tasks);
                //     }
                // });
            });
            $('#incomplete-tasks').on('click', '.delete', function(){
                id = $(this).parent()[0].id;
                $.ajax({
                   url:'server.php',
                   type:'POST',
                    data:{'id3':id},
                    success:function(result) {
                        displayTodo(result);
                    }
                });
            });
            $('#completed-tasks').on('click', '.delete', function(){
                id = $(this).parent()[0].id;
                $.ajax({
                   url:'server.php',
                   type:'POST',
                    data:{'id4':id},
                    success:function(result1) {
                            displayCompleted(result1);
                    }
                });
            });

            $('#completed-tasks').on('click', '.edit', function(){
                idCompleted = $(this).parent()[0].id;
                task = $(this).parent().children().eq(1).text();
                $('#new-task').val(task);
                $('.add').css({"display":"none"});
                $('.update1').css({"display":"block"});
            });
        
            $('.addTasks').on('click', '.update1', function(){
                updatedTask = $('#new-task').val();
                $('#new-task').val("");
                $.ajax({
                    url:'server.php',
                    type:'POST',
                    data:{'id5':idCompleted, 'updatedData2':updatedTask},
                    success:function(result) {
                            displayCompleted(result);      
                    }
                });
                $('.add').css({"display":"block"});
                $(".update1").css({"display":"none"});
            }); 
            
            $('#completed-tasks').on('click', '.check', function(){
                id3 = $(this).parent()[0].id;
                $.ajax({
                   url:'server.php',
                   type:'POST',
                   data:{'id6':id3},
                   success:function(result){
                          $.ajax({
                            url:'server.php',
                            type:'POST',
                            data:{'id7':id3},
                            success:function(result1) {
                            displayCompleted(result1);
                            }
                          });
                           displayTodo(result);
                   }
                });
                $.ajax({
                   url:'server.php',
                   type:'POST',
                   data:{'id7':id3},
                   success:function(result1) {
                           displayCompleted(result1);
                   }
                });
            });
            

        });
                
    </script>
    </head>
    <body>
        <center><a href="destroy.php">Empty Todo List</a></center>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p class="addTasks">
                <input id="new-task" type="text">
                <button class="add">Add</button>
                <button class="update" hidden>Update</button>
                <button class="update1" hidden>Update</button>
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
            </ul>
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <li><input type="checkbox" checked><label>See the Doctor</label><input type="text">
                <button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
        </div>
    
            
    
    </body>
</html>