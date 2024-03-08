<style>
    .selected {
        background-color : blue;
    }
    .divider {
            width: 100%;
            height: 1px;
            background-color: #494E53;
        }
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:100%; overflow-y: auto">

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
            <!-- <div class="sidebar-search-results">
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
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                       Projects
                       <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                        <li id='menu_projects' class="nav-item">
                            <a href="{{route('projectForm')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Projects</p>
                            </a>
                        </li>
                        
                        <li id='menu_projecttechnology' class="nav-item">
                            <a href="{{route('projectTechnologyPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Project Technology</p>
                            </a>
                        </li>
                        <li id='menu_targets' class="nav-item">
                            <a href="{{route('projectTargetForm')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Project Targets</p>
                            </a>
                        </li>
                        <li id='menu_missiontypes' class="nav-item">
                            <a href="{{route('missionTypeForm')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Missions Types</p>
                            </a>
                        </li>
                        <li id='menu_sources' class="nav-item">
                            <a href="{{route('foundSourceForm')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Found Sources</p>
                            </a>
                        </li>
                        <li id='menu_business' class="nav-item ">
                            <a href="{{ route('businessArea') }}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Business Areas</p>
                            </a>
                        </li>
                        <li id='menu_refOrganizationUnits' class="nav-item">
                            <a href="{{route('ref_OrganizationUnitPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Ref Company Units</p>
                            </a>
                        </li>
                        <li id='menu_projectOrganizations' class="nav-item">
                            <a href="{{route('projectOrganizationPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Ref Companies</p>
                            </a>
                        </li>
                    </ul>
                </li>
            <div class="divider"></div>

                <li  id='menu_definitions' class="nav-item ">
                    <a href="{{ route('definitionPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Definitions
                        </p>
                    </a>
                </li>

                <div class="divider"></div>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                       Entities
                       <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                        <li id='menu_entities' class="nav-item">
                            <a href="{{route('humanEntityPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>
                            Human Entities
                            </p>
                            </a>
                        </li>
                        <li id='menu_legalentity' class="nav-item">
                            <a href="{{route('legalEntityForm')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Type of Company</p>
                            </a>
                        </li>
                        <li  id='menu_orgtypes' class="nav-item ">
                            <a href="{{ route('organizationTypePage') }}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Company Types </p>
                            </a>
                        </li>
                        <li id='menu_workingOrganizations' class="nav-item">
                            <a href="{{route('orgPerformingWorkPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p style="font-size:15px">
                            Working Companies
                            </p>
                            </a>
                        </li>
                        <li id='menu_organzationUnits' class="nav-item">
                            <a href="{{route('organizationUnitPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>
                             Company Units
                            </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

            <div class="divider"></div>

                <li  id='menu_locations' class="nav-item ">
                    <a href="{{ route('locationForm') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                    Locations </p>
                    </a>
                </li>

            <div class="divider"></div>

                

              <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Technologies
                       <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                         <li id='menu_technologies' class="nav-item">
                            <a href="{{route('technologyPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Technologies</p>
                            </a>
                        </li>
                        <li id='menu_techarea' class="nav-item">
                            <a href="{{route('techAreaPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>
                            Technology Areas
                            </p>
                            </a>
                        </li>
                        <li id='menu_techsector' class="nav-item">
                            <a href="{{route('techSectorPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>Technology Sectors</p>
                            </a>
                        </li>
                        <li id='menu_techniche' class="nav-item">
                            <a href="{{route('techSubSectorPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>
                            Technology Niches
                            </p>
                            </a>
                        </li>
                        <li id='menu_techreferred' class="nav-item">
                            <a href="{{route('techPage')}}" class="nav-link">
                            <i class="fas fa-edit nav-icon"></i>
                            <p>
                            Technology Referreds
                            </p>
                            </a>
                        </li>
                        <li  id='menu_trl' class="nav-item ">
                            <a href="{{ route('trlPage') }}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                Technology Readiness Level (TRL)</p>
                            </a>
                        </li>

                    </ul>
                </li>
              
            <div class="divider"></div>

                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Units
                       <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                       
                    </ul>
                </li>

            <div class="divider"></div> -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Equipments and Products
                       <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                    <li  id='menu_products' class="nav-item">
                    <a href="{{route('productPage')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>

                <li id='menu_equipments' class="nav-item ">
                    <a href="{{ route('equipmentPage') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Equipments
                        </p>
                    </a>
                </li>

                <li  id='menu_reference' class="nav-item ">
                  <a href="{{ route('referencePage') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                       Reference</p>
                  </a>
              </li>

                

              <li  id='menu_priorities' class="nav-item ">
                  <a href="{{ route('priorityPage') }}" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                       Priorities</p>
                  </a>
                </li>

                
              
                <li  id='menu_refEquipments' class="nav-item">
                   <a href="{{route('ref_EquipmentPage')}}" class="nav-link">
                       <i class="nav-icon fas fa-edit"></i>
                       <p>
                        Ref Equipments
                      </p>
                    </a>
                </li>
                </ul>
            </li>
            
            <div class="divider"></div>

            <li  id='menu_requirements' class="nav-item">
                <a href="{{route('requirementPage')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                       Requirements
                    </p>
                </a>
               </li>

            </ul> 
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
