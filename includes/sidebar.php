<aside id="sidebar">
            <!-- Content for Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="index.php"><i class="fas fa-book-reader pe-2"></i>
                        LU - Digital Library</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        <i class="fas fa-user-shield pe-2"></i>
                        Logged in as Library Director
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php" class="sidebar-link">
                            <i class="fas fa-home pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Admin Controls
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#libholds" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fas fa-bookmark pe-2"></i>
                            Library Holdings
                        </a>
                        <ul id="libholds" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link" data-bs-target="#pubmat" data-bs-toggle="collapse"
                                    aria-expanded="false">
                                    <i class="fas fa-user-check ps-3 pe-2"></i>
                                    Published Materials
                                </a>
                                <ul id="pubmat" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;eBooks</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="books.php" class="sidebar-link">&emsp;Books</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Clippings</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;eJournals and eMagazines</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Fiction</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link" data-bs-target="#notpubmat" data-bs-toggle="collapse"
                                    aria-expanded="false">
                                    <i class="fas fa-user-alt-slash ps-3 pe-2"></i>
                                    Unpublished Materials
                                </a>
                                <ul id="notpubmat" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Workbooks</a>
                                    </li>
                                <!--    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;SHS Workbooks</a>
                                    </li> -->
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Thesis</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="capstone.php" class="sidebar-link">&emsp;Capstone</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Feasibility Studies</a>
                                    </li>
                                <!--    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Manuscript</a>
                                    </li> -->
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Narrative Reports</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="circulation.php" class="sidebar-link">
                            <i class="fas fa-redo pe-2"></i>
                            Circulation
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Automated Processes
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#automation"
                            data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-hashtag pe-2"></i>
                            Report Generation
                        </a>
                        <ul id="automation" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="inventory.php" class="sidebar-link">Inventory</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="logbook-records.php" class="sidebar-link">Logbook Records</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </aside>