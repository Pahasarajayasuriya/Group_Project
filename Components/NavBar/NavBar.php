                        <?php
                            if($role == "User"){
                                echo '<li class="nav-link">
                                        <a href="#" id="home-link">
                                            <i class="bx bx-home"></i>
                                            <span class="text nav-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="#" id="profile-link">
                                            <i class="bx bxs-user-circle"></i>
                                            <span class="text nav-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="#" id="products-link">
                                            <i class="bx bx-food-menu"></i>
                                            <span class="text nav-text">Products</span>
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="#" id="process-link">
                                            <i class="bx bx-rotate-left"></i>
                                            <span class="text nav-text">Process</span>
                                        </a>
                                    </li><li class="nav-link">
                                        <a href="#" id="exports-link">
                                            <i class="bx bxs-plane-alt"></i>
                                            <span class="text nav-text">Exports</span>
                                        </a>
                                    </li> 
                                    <li class="nav-link">
                                        <a href="#" id="recipies-link">
                                            <i class="bx bx-food-menu"></i>
                                            <span class="text nav-text">Recipies</span>
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="#" id="complains-link">
                                            <i class="bx bxs-spreadsheet"></i>
                                            <span class="text nav-text">Complains</span>
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="#" id="aboutus-link">
                                            <i class="bx bxl-microsoft-teams"></i>
                                            <span class="text nav-text">About Us</span>
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="#" id="contactus-link">
                                            <i class="bx bxs-phone-call"></i>
                                            <span class="text nav-text">Contact Us</span>
                                        </a>
                                    </li>';
                            }elseif($role == "Employee"){
                                echo '
                                <li class="nav-link">
                                    <a href="#" id="profile-link">
                                        <i class="bx bxs-user-circle"></i>
                                        <span class="text nav-text">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-link">
                                    <a href="#" id="products-link">
                                        <i class="bx bx-food-menu"></i>
                                        <span class="text nav-text">Stocks</span>
                                    </a>
                                </li>
                                <li class="nav-link">
                                    <a href="#" id="complains-link">
                                        <i class="bx bxs-spreadsheet"></i>
                                        <span class="text nav-text">Orders</span>
                                    </a>
                                </li>';
                        }elseif($role == "Manager"){
                            echo '
                            <li class="nav-link">
                                <a href="#" id="profile-link">
                                    <i class="bx bxs-user-circle"></i>
                                    <span class="text nav-text">Profile</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="products-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Products</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="process-link">
                                    <i class="bx bx-rotate-left"></i>
                                    <span class="text nav-text">Order History</span>
                                </a>
                            </li><li class="nav-link">
                                <a href="#" id="exports-link">
                                    <i class="bx bxs-plane-alt"></i>
                                    <span class="text nav-text">Employees</span>
                                </a>
                            </li> 
                            <li class="nav-link">
                                <a href="#" id="recipies-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Diliverers</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="complains-link">
                                    <i class="bx bxs-spreadsheet"></i>
                                    <span class="text nav-text">Complaints</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="recipies-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Feedbacks</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="recipies-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Reports</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="recipies-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Branch Details</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="recipies-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Customers</span>
                                </a>
                            </li>';
                        }elseif($role == "Admin"){
                            echo '
                            <li class="nav-link">
                                <a href="#" id="profile-link">
                                    <i class="bx bxs-user-circle"></i>
                                    <span class="text nav-text">Customers</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="products-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Managers</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="process-link">
                                    <i class="bx bx-rotate-left"></i>
                                    <span class="text nav-text">Employees</span>
                                </a>
                            </li><li class="nav-link">
                                <a href="#" id="exports-link">
                                    <i class="bx bxs-plane-alt"></i>
                                    <span class="text nav-text">Deliverers</span>
                                </a>
                            </li> 
                            <li class="nav-link">
                                <a href="#" id="recipies-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Products</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="complains-link">
                                    <i class="bx bxs-spreadsheet"></i>
                                    <span class="text nav-text">Branches</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="recipies-link">
                                    <i class="bx bx-food-menu"></i>
                                    <span class="text nav-text">Advertisements</span>
                                </a>
                            </li>';
                        }elseif($role == "Deliverer"){
                            echo '
                            <li class="nav-link">
                                <a href="#" id="profile-link">
                                    <i class="bx bxs-user-circle"></i>
                                    <span class="text nav-text">Profile</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" id="complains-link">
                                    <i class="bx bxs-spreadsheet"></i>
                                    <span class="text nav-text">Assign Orders</span>
                                </a>
                            </li>';
                        }
                        ?>