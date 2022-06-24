<?php

    $cardId=$_POST['cardId'];
    $output="";
    if($cardId=='add-student-btn')
    {
        $output ='
                <form class="dialog-form">
                    <div class="input-group">
                        <div class="name">
                            <input type="text" placeholder="Student\'s Name" id="name-id">
                        </div>
                        <div class="fname">
                            <input type="text" placeholder="Father\'s Name" id="fname-id">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <div class="dob">
                            <input type="date" id="dob-id">
                        </div>
                        <div class="regNo">
                            <input type="text" placeholder="Registration No" id="regNo-id">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <div class="mobile">
                            <input type="tel" placeholder="Mobile No" id="mobile-id">
                        </div>
                        <div class="email">
                            <input type="email" placeholder="Email" id="email-id">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <div class="course">
                            <select id="course-id">
                                <option value="null">----- Select course -----</option>
                                <option value="B.tech">B.tech</option>
                                <option value="B.phrma">B.phrma</option>
                                <option value="BCA">BCA</option>
                                <option value="BBA">BBA</option>
                                <option value="M.tech">M.tech</option>
                                <option value="MCA">MCA</option>
                                <option value="MBA">MBA</option>
                            </select>
                        </div>
                        <div class="branch">
                            <select id="branch-id">
                                <option value="null">----- Select Branch -----</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="EEE">EEE</option>
                                <option value="CIVIL">CIVIL</option>
                                <option value="MECH">MECH</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="profile">
                            <input type="file" id="profile-id">
                        </div>
                        <div class="address">
                            <input type="text" placeholder="Enter address" id="address-id">
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
    // for remove student form
    else if($cardId=='remove-student-btn')
    {
        $output ='
                <form class="dialog-form">
                    <i class="fa fa-circle-o-notch fa-spin" style="color: red; font-size: 35px;"></i>
                </form>';
    }

    echo $output;

?>