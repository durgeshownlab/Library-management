<?php

    $cardId=$_POST['cardId'];
    $output="";
    if($cardId=='add-student-btn')
    {
        $output ='
                <form class="dialog-form">
                    <div class="input-group">
                        <div class="name">
                            <input type="text" placeholder="Student\'s Name">
                        </div>
                        <div class="fname">
                            <input type="text" placeholder="Father\'s Name">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <div class="dob">
                            <input type="date">
                        </div>
                        <div class="regNo">
                            <input type="text" placeholder="Registration No">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <div class="course">
                            <select name="" id="">
                                <option value="">----- Select course -----</option>
                                <option value="">B.tech</option>
                                <option value="">B.phrma</option>
                                <option value="">BCA</option>
                                <option value="">BBA</option>
                                <option value="">M.tech</option>
                                <option value="">MCA</option>
                                <option value="">MBA</option>
                            </select>
                        </div>
                        <div class="branch">
                            <select name="" id="">
                                <option value="">----- Select Branch -----</option>
                                <option value="">CSE</option>
                                <option value="">ECE</option>
                                <option value="">EEE</option>
                                <option value="">CIVIL</option>
                                <option value="">MECH</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="profile">
                            <input type="file">
                        </div>
                        <div class="address">
                            <input type="text" placeholder="Enter address">
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="submit-btn">
                            <input type="button" value="Submit">
                        </div>
                        <div class="reset-btn">
                            <input type="reset">
                        </div>
                    </div>
                </form>';
    }

    echo $output;

?>