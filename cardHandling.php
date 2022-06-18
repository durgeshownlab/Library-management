<?php
    $cardId=$_POST['cardId'];
    $output="";
    if($cardId=='manage-student-btn')
    {
        $output='
        <div class="back-btn-container">
            <button id="back-btn-id">
                <i class="fa fa-arrow-left"></i>
                <span>&nbsp;Back</span>
            </button>
        </div>

        <div class="services-main-cards-container">
            <div class="card">
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
                    <button id="add-student-btn-id">Add</button>
                </div>
            </div>
            
            <div class="card">
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
                    <button id="remove-student-btn-id">Remove</button>
                </div>
            </div>
            
            <div class="card">
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
                    <button id="update-student-btn-id">Update</button>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="img/books1.jpg">
                </div>
                <div class="card-title">
                    <h3>Student Details</h3>
                </div>
                <div class="card-desc">
                    <p>See the details of all students</p>
                </div>
                <div class="card-btn">
                    <button id="student-details-btn-id">View</button>
                </div>
            </div>
        </div>';

    }

    else if($cardId=='manage-book-btn')
    {
        $output='
        <div class="back-btn-container">
            <button id="back-btn-id">
                <i class="fa fa-arrow-left"></i>
                <span>&nbsp;Back</span>
            </button>
        </div>

        <div class="services-main-cards-container">
            <div class="card">
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
            </div>
            
            <div class="card">
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
            </div>
            
            <div class="card">
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
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="img/books1.jpg">
                </div>
                <div class="card-title">
                    <h3>Book Details</h3>
                </div>
                <div class="card-desc">
                    <p>See the details of all available books</p>
                </div>
                <div class="card-btn">
                    <button id="return-books-id">View</button>
                </div>
            </div>
        </div>';

    }

    echo $output;
?>