<?php
    $cardId=$_POST['cardId'];
    $output="";
    if($cardId==1)
    {
            $output='<div class="card">
            <div class="card-image">
                <img src="img/books1.jpg">
            </div>
            <div class="card-title">
                <h3>Add Student</h3>
            </div>
            <div class="card-desc">
                <p>Add new student to your library</p>
            </div>
            <div class="card-btn">
                <button id="return-books-id" onclick="showDialog()">Add</button>
            </div>
        </div>';
        
            $output .='<div class="card">
            <div class="card-image">
                <img src="img/books1.jpg">
            </div>
            <div class="card-title">
                <h3>Remove Student</h3>
            </div>
            <div class="card-desc">
                <p>Remove student from your library</p>
            </div>
            <div class="card-btn">
                <button id="return-books-id">Remove</button>
            </div>
        </div>';
        
            $output .='<div class="card">
            <div class="card-image">
                <img src="img/books1.jpg">
            </div>
            <div class="card-title">
                <h3>Update Details</h3>
            </div>
            <div class="card-desc">
                <p>Update the details of student</p>
            </div>
            <div class="card-btn">
                <button id="return-books-id">Update</button>
            </div>
        </div>';

    }

    else if($cardId==2)
    {
            $output='<div class="card">
            <div class="card-image">
                <img src="img/books1.jpg">
            </div>
            <div class="card-title">
                <h3>Add Book</h3>
            </div>
            <div class="card-desc">
                <p>Add new book to your library</p>
            </div>
            <div class="card-btn">
                <button id="return-books-id">Add</button>
            </div>
        </div>';
        
            $output .='<div class="card">
            <div class="card-image">
                <img src="img/books1.jpg">
            </div>
            <div class="card-title">
                <h3>Remove Book</h3>
            </div>
            <div class="card-desc">
                <p>Remove book from your library</p>
            </div>
            <div class="card-btn">
                <button id="return-books-id">Remove</button>
            </div>
        </div>';
        
            $output .='<div class="card">
            <div class="card-image">
                <img src="img/books1.jpg">
            </div>
            <div class="card-title">
                <h3>Update Book</h3>
            </div>
            <div class="card-desc">
                <p>Update existing book details in your library</p>
            </div>
            <div class="card-btn">
                <button id="return-books-id">Update</button>
            </div>
        </div>';

    }

    echo $output;
?>