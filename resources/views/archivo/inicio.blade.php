@extends('layouts.master')

@section('contenido')
    <div class="section app-file-manager-wrapper">
        <!-- File Manager app overlay -->
        <div class="app-file-overlay"></div>
        <!-- /File Manager app overlay -->
        <!-- sidebar left start -->
        <div class="sidebar-left">
            <!--left sidebar of file manager start -->
            <div class="app-file-sidebar display-flex">
                <!-- App File sidebar - Left section Starts -->
                <div class="app-file-sidebar-left">
                    <!-- sidebar close icon starts -->
                    <span class="app-file-sidebar-close hide-on-med-and-up"><i class="material-icons">close</i></span>
                    <!-- sidebar close icon ends -->
                    <div class="input-field add-new-file mt-0">
                        <!-- Add File Button -->
                        <button class="add-file-btn btn btn-block waves-effect waves-light mb-10">
                            <i class="material-icons">add</i>
                            <span>Add File</span>
                        </button>
                        <!-- file input  -->
                        <div class="getfileInput">
                            <input type="file" id="getFile">
                        </div>
                    </div>

                    <div class="app-file-sidebar-content">
                        <!-- App File Left Sidebar - Drive Content Starts -->
                        <span class="app-file-label">My Drive</span>
                        <div class="collection file-manager-drive mt-3">
                            <a href="#" class="collection-item file-item-action active">
                                <div class="fonticon-wrap display-inline mr-3">
                                    <i class="material-icons">folder_open</i>
                                </div>
                                <span>All Files</span>
                                <span class="chip red lighten-5 float-right red-text">2</span>
                            </a>
                            <a href="#" class="collection-item file-item-action">
                                <div class="fonticon-wrap display-inline mr-3">
                                    <i class="material-icons">delete</i>
                                </div>
                                <span> Deleted Files</span>
                            </a>
                        </div>
                        <!-- App File Left Sidebar - Drive Content Ends -->


                        <!-- App File Left Sidebar - Storage Content Starts -->
                        <span class="app-file-label">Storage Status</span>
                        <div class="display-flex mb-1 mt-3">
                            <div class="fonticon-wrap mr-3">
                                <i class="material-icons storage-icon">sd_card</i>
                            </div>
                            <div class="file-manager-progress">
                                <small>1.5TB used of 25GB</small>
                                <div class="progress pink lighten-5 mt-0">
                                    <div class="determinate" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- App File Left Sidebar - Storage Content Ends -->
                    </div>
                </div>
            </div>
            <!--left sidebar of file manager start -->
        </div>
        <!--/ sidebar left end -->
        <!-- content-right start -->
        <div class="content-right">
            <!-- file manager main content start -->
            <div class="app-file-area">
                <!-- File App Content Area -->

                <!-- App File Content Starts -->
                <div class="app-file-content">
                    <h6 class="font-weight-700 mb-3">All Files</h6>

                    <!-- App File - Recent Accessed Files Section Starts -->
                    <span class="app-file-label">Recently Accessed Files</span>
                    <div class="row app-file-recent-access mb-3">
                        <div class="col xl3 l6 m3 s12">
                            <div class="card box-shadow-none mb-1 app-file-info">
                                <div class="card-content">
                                    <div class="app-file-content-logo grey lighten-4">
                                        <div class="fonticon">
                                            <i class="material-icons">more_vert</i>
                                        </div>
                                        <img class="recent-file" src="../../../app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                    </div>
                                    <div class="app-file-recent-details">
                                        <div class="app-file-name font-weight-700">Felecia_Resume.pdf</div>
                                        <div class="app-file-size">12.85kb</div>
                                        <div class="app-file-last-access">Last accessed : 3 hours ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col xl3 l6 m3 s12">
                            <div class="card box-shadow-none mb-1 app-file-info">
                                <div class="card-content">
                                    <div class="app-file-content-logo grey lighten-4">
                                        <div class="fonticon"><i class="material-icons">more_vert</i></div>
                                        <img class="recent-file" src="../../../app-assets/images/icon/psd.png" height="38" width="30" alt="Card image cap">
                                    </div>
                                    <div class="app-file-content-details">
                                        <div class="app-file-name font-weight-700">Logo_design.psd</div>
                                        <div class="app-file-size">15.60mb</div>
                                        <div class="app-file-last-access">Last accessed : 3 hours ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- App File - Recent Accessed Files Section Ends -->

                    <!-- App File - Folder Section Starts -->
                    <span class="app-file-label">Folder</span>
                    <div class="row app-file-folder mb-3">
                        <div class="col xl3 l6 m4 s6">
                            <div class="card box-shadow-none mb-1 app-file-info">
                                <div class="card-content">
                                    <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
                                        <div class="app-file-folder-logo mr-3">
                                            <i class="material-icons">folder_open</i>
                                        </div>
                                        <div class="app-file-folder-details">
                                            <div class="app-file-folder-name font-weight-700">Video</div>
                                            <div class="app-file-folder-size">130 files, 890mb</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col xl3 l6 m4 s6">
                            <div class="card box-shadow-none mb-1 app-file-info">
                                <div class="card-content">
                                    <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
                                        <div class="app-file-folder-logo mr-3">
                                            <i class="material-icons">folder_open</i>
                                        </div>
                                        <div class="app-file-folder-details">
                                            <div class="app-file-folder-name font-weight-700">Music</div>
                                            <div class="app-file-folder-size">15 files, 58mb</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col xl3 l6 m4 s6">
                            <div class="card box-shadow-none mb-1 app-file-info">
                                <div class="card-content">
                                    <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
                                        <div class="app-file-folder-logo mr-3">
                                            <i class="material-icons">folder_open</i>
                                        </div>
                                        <div class="app-file-folder-details">
                                            <div class="app-file-folder-name font-weight-700">Documents</div>
                                            <div class="app-file-folder-size">12 files, 9.5mb</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col xl3 l6 m4 s6">
                            <div class="card box-shadow-none mb-1 app-file-info">
                                <div class="card-content">
                                    <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
                                        <div class="app-file-folder-logo mr-3">
                                            <i class="material-icons">folder_open</i>
                                        </div>
                                        <div class="app-file-folder-details">
                                            <div class="app-file-folder-name font-weight-700">Photos</div>
                                            <div class="app-file-folder-size">3.6k files, 348mb</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- App File - Folder Section Ends -->
                </div>
            </div>

            <!-- file manager main content end  -->
        </div>
        <!-- content-right end -->
        <!-- App File sidebar - Right section Starts -->
        <div class="app-file-sidebar-info">
            <div class="card box-shadow-none m-0 pb-1">
                <div class="card-header display-flex justify-content-between align-items-center">
                    <h6 class="m-0">Document.pdf</h6>
                    <div class="app-file-action-icons display-flex align-items-center">
                        <i class="material-icons mr-10">delete</i>
                        <i class="material-icons close-icon">close</i>
                    </div>
                </div>
                <div class="card-content">
                    <ul class="tabs tabs-fixed-width mb-1">
                        <li class="tab mr-1 pr-1">
                            <a class="active display-flex align-items-center" id="details-tab" href="#details">
                                <i class="material-icons mr-1">content_paste</i>
                                <span>Details</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="activity-tab" href="#file-activity">
                                <i class="material-icons mr-1">timeline</i>
                                <span>Activity</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- App File sidebar - Right section Ends -->
    </div><!-- START RIGHT SIDEBAR NAV -->

@endsection
