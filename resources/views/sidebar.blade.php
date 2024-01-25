<style>
    .selected {
        background-color : blue;
    }
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:100%; overflow: auto">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="public\dist\img\png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            {{-- <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div> --}}
            <div class="sidebar-search-results">
                <div class="list-group"><a href="#" class="list-group-item">
                        <div class="search-title"><strong class="text-light"></strong>N<strong
                                class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                class="text-light"></strong></div>
                        <div class="search-path"></div>
                    </a></div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item ">
                <a href="{{route('projectForm')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Projects

                    </p>
                </a>
            </li>


                <li class="nav-item ">
                    <a href="{{ route('businessArea') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Business Areas

                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('definitionPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Definitions
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('equipmentPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Equipments
                        </p>
                    </a>
                </li>


                <li class="nav-item ">
                    <a href="{{ route('foundSourceForm') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Found Sources
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('projectTargetForm') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Project Targets
                        </p>
                    </a>
                </li>


                <li class="nav-item ">
                    <a href="{{ route('humanEntityPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Human Entities </p>
                    </a>
                </li>

                <li class="nav-item ">
                  <a href="{{ route('legalEntityForm') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                          Legal Entities </p>
                  </a>
              </li>

                <li class="nav-item ">
                  <a href="{{ route('locationForm') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                          Locations </p>
                  </a>
              </li>

                <li class="nav-item ">
                  <a href="{{ route('missionTypeForm') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                        Missions Types </p>
                  </a>
              </li>

                <li class="nav-item ">
                  <a href="{{ route('organizationTypePage') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                        Organization Types </p>
                  </a>
              </li>

                <li class="nav-item ">
                  <a href="{{ route('priorityPage') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                       Priorities</p>
                  </a>
              </li>


                <li class="nav-item ">
                  <a href="{{ route('referencePage') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                       Reference</p>
                  </a>
              </li>


                <li class="nav-item ">
                    <a href="{{ route('techAreaPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                         Technology Area</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('techSectorPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                         Technology Sector</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('techSubSectorPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                         Technology Niche</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('technologyPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                         Technologies</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('trlPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                         Technology Readiness Level (TRL)</p>
                    </a>
                </li>

                <li id="menu_techreferred" class="nav-item">
                    <a href="{{route('techPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Technology Referred
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('projectTechnologyPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Project Technology
                        </p>
                    </a>
                </li>
                   
                <li class="nav-item">
                    <a href="{{route('orgPerformingWorkPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Working Organizations
                        </p>
                    </a>
                </li>
                  
                <li class="nav-item">
                    <a href="{{route('projectOrganizationPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Project Organizations
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{route('organizationUnitPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Organization Units
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('ref_OrganizationUnitPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Ref Organization Units
                        </p>
                    </a>
                </li>

            <li class="nav-item">
                <a href="{{route('requirementPage')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                       Requirements
                    </p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{route('ref_EquipmentPage')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Ref Equipments
                    </p>
                </a>
            </li>

                <li class="nav-item">
                    <a href="{{route('productPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
