<?php

use App\Http\Controllers\AdvanceSearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BusinessAreaController;
use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FoundingSourcesController;
use App\Http\Controllers\HumanEntityController;
use App\Http\Controllers\LegalEntityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MissionTypeController;
use App\Http\Controllers\OrganizationTypeController;
use App\Http\Controllers\OrganizationUnitController;
use App\Http\Controllers\OrgPerformingWorkController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectOrganizationController;
use App\Http\Controllers\ProjectTargetController;
use App\Http\Controllers\ProjectTechnologyController;
use App\Http\Controllers\Ref_EquipmentController;
use App\Http\Controllers\Ref_OrganizationUnitController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\SearchReultsController;
use App\Http\Controllers\TechAreaController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\TechReferredController;
use App\Http\Controllers\TechSectorController;
use App\Http\Controllers\TechSubSectorController;
use App\Http\Controllers\TrlController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(HomeController::class)->group(function(){
    Route::get('/' , 'homePage')->name('homePage');
    Route::post('/getProjectsLengthByTechAreaID' , 'getProjectsLengthByTechAreaID')->name('getProjectsLengthByTechAreaID');
    Route::post('/getProjectsLengthByTechSectorID' , 'getProjectsLengthByTechSectorID')->name('getProjectsLengthByTechSectorID');
    Route::post('/getProjectsLengthByTechNicheID' , 'getProjectsLengthByTechNicheID')->name('getProjectsLengthByTechNicheID');
});

Route::controller(AdvanceSearchController::class)->group(function(){
    Route::get('/advanceSearch' , 'index')->name('advanceSearch');
    Route::get('/getProjectsByAdvanceSearch', 'getProjectsByAdvanceSearch')->name('getProjectsByAdvanceSearch');
});

Route::controller(SearchReultsController::class)->group(function(){
    Route::get('/search-results','index')->name('searchResultsPage');
Route::post('/searchProjects','searchProjects')->name('searchProjects');
Route::post('/getProjectsLengthBySearchID', 'getProjectsLengthBySearchID')->name('getProjectsLengthBySearchID');
});
//                Routes for Users without AUTH AdminLte 
// Route::get('/admin' ,[UserController::class , 'admin'])->name('admin');
// Route::get('/admintable' ,[UserController::class , 'admintable'])->name('admintable');
// Route::get('/user/login' ,[UserController::class , 'login'])->name('user.login');
// Route::get('/user/register' ,[UserController::class , 'register'])->name('user.register');
// Route::post('/user/save' ,[UserController::class , 'save'])->name('user.save');
// Route::post('/user/check' ,[UserController::class , 'check'])->name('user.check');
// Route::get('/dashboardview' ,[UserController::class , 'dashboard'])->name('dashboard');

Auth::routes();
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::controller(ProjectController::class)->group(function () {
    Route::get('/low-evolution/{id}', 'index')->name('projectPage');
    Route::get('/projectForm' , 'projectPage')->name('projectForm');
    Route::get('/addProject' , 'addPage')->name('addProject');
    Route::post('/projectCreate' , 'create')->name('projectCreate');
    Route::get('/projectRead/{id}' , 'read')->name('projectRead');
    Route::get('/projectUpdatePage/{id}' , 'updatePage')->name('projectUpdatePage');
    Route::post('/projectUpdate' , 'update')->name('projectUpdate');
    Route::get('/projectDelete/{id}' , 'delete')->name('projectDelete');
    Route::get('/downloadPdf/{id}', 'downloadPdf')->name('downloadPdf');
});

Route::controller(BusinessAreaController::class)->group(function () {
  Route::post('/businessAreaCreate',  'create')->name('businessAreaCreate');
  Route::get('/businessAreaRead/{id}' , 'read')->name('businessAreaRead');
  Route::post('/businessAreaUpdate',  'update')->name('businessAreaUpdate');
  Route::get('/businessAreaDelete/{id}',  'delete')->name('businessAreaDelete');
  Route::get('/addBusiness',  'createPage')->name('addBusiness');
  Route::get('/businessArea' , 'readPage')->name('businessArea');
  Route::get('/updateBusiness/{id}' , 'updatePage')->name('updateBusiness');
});

Route::controller(DefinitionController::class)->group(function(){
    Route::get('/definitionPage' , 'definitionPage')->name('definitionPage');
    Route::get('/addDefinition' , 'addPage')->name('addDefinition');
    Route::post('/definitionCreate' , 'create')->name('definitionCreate');
    Route::get('/definitionRead/{id}' , 'read')->name('definitionRead');
    Route::get('/definitionUpdatePage/{id}' , 'updatePage')->name('definitionUpdatePage');
    Route::post('/definitionUpdate' , 'update')->name('definitionUpdate');
    Route::get('/definitionDelete/{id}' , 'delete')->name('definitionDelete');
});

Route::controller(EquipmentController::class)->group(function(){
    Route::get('/equipmentPage' , 'equipmentPage')->name('equipmentPage');
    Route::get('/addEquipment' , 'addPage')->name('addEquipment');
    Route::post('/equipmentCreate' , 'create')->name('equipmentCreate');
    Route::get('/equipmentRead/{id}' , 'read')->name('equipmentRead');
    Route::get('/equipmentUpdatePage/{id}' , 'updatePage')->name('equipmentUpdatePage');
    Route::post('/equipmentUpdate' , 'update')->name('equipmentUpdate');
    Route::get('/equipmentDelete/{id}' , 'delete')->name('equipmentDelete');
});

Route::controller(FoundingSourcesController::class)->group(function(){
    Route::get('/found-sources' , 'index')->name('found-source');
    Route::get('/foundSourceForm' , 'foundSourcePage')->name('foundSourceForm');
    Route::get('/addFoundSource' , 'addPage')->name('addFoundSource');
    Route::post('/foundSourceCreate' , 'create')->name('foundSourceCreate');
    Route::get('/foundSourceRead/{id}' , 'read')->name('foundSourceRead');
    Route::get('/foundSourceUpdatePage/{id}' , 'updatePage')->name('foundSourceUpdatePage');
    Route::post('/foundSourceUpdate' , 'update')->name('foundSourceUpdate');
    Route::get('/foundSourceDelete/{id}' , 'delete')->name('foundSourceDelete');
    Route::get('/found-sources-clicking/{id}' , 'foundSourcesClickingPage')->name('foundSourcesClickingPage');
    Route::get('/getProjectsLengthBySourceID/{sourceID}/{trlID}' , 'getProjectsLengthBySourceID')->name('getProjectsLengthBySourceID');
});

Route::controller(ProjectTargetController::class)->group(function(){
    Route::get('/project-targets' , 'index')->name('projectTargetsPage');
    Route::get('/projectTargetForm' , 'projectTargetPage')->name('projectTargetForm');
    Route::get('/addProjectTarget' , 'addPage')->name('addProjectTarget');
    Route::post('/projectTargetCreate' , 'create')->name('projectTargetCreate');
    Route::get('/projectTargetRead/{id}' , 'read')->name('projectTargetRead');
    Route::get('/projectTargetUpdatePage/{id}' , 'updatePage')->name('projectTargetUpdatePage');
    Route::post('/projectTargetUpdate' , 'update')->name('projectTargetUpdate');
    Route::get('/projectTargetDelete/{id}' , 'delete')->name('projectTargetDelete');
    Route::get('/project-target-clicking/{id}' , 'projectTargetClickingPage')->name('projectTargetClickingPage');
    Route::get('/getProjectsLengthByProjectTargetID/{projectID}/{trlID}' , 'getProjectsLengthByProjectTargetID')->name('getProjectsLengthByProjectTargetID');
});

Route::controller(HumanEntityController::class)->group(function(){
    Route::get('/humanEntityPage' , 'humanEntityPage')->name('humanEntityPage');
    Route::get('/addHumanEntity' , 'addPage')->name('addHumanEntity');
    Route::post('/humanEntityCreate' , 'create')->name('humanEntityCreate');
    Route::get('/humanEntityRead/{id}' , 'read')->name('humanEntityRead');
    Route::get('/humanEntityUpdatePage/{id}' , 'updatePage')->name('humanEntityUpdatePage');
    Route::post('/humanEntityUpdate' , 'update')->name('humanEntityUpdate');
    Route::get('/humanEntityDelete/{id}' , 'delete')->name('humanEntityDelete');
});

Route::controller(LegalEntityController::class)->group(function(){
    Route::get('/legal-entity-roles', 'index')->name('legalEntityRolesPage');
    Route::get('/legalEntityForm' , 'legalEntityPage')->name('legalEntityForm');
    Route::get('/addLegalEntity' , 'addPage')->name('addLegalEntity');
    Route::post('/legalEntityCreate' , 'create')->name('legalEntityCreate');
    Route::get('/legalEntityRead/{id}' , 'read')->name('legalEntityRead');
    Route::get('/legalEntityUpdatePage/{id}' , 'updatePage')->name('legalEntityUpdatePage');
    Route::post('/legalEntityUpdate' , 'update')->name('legalEntityUpdate');
    Route::get('/legalEntityDelete/{id}' , 'delete')->name('legalEntityDelete');
    Route::get('/legal-entity-roles-clicking/{id}' , 'legalEntityClickingPage')->name('legalEntityClickingPage');
    Route::get('/getProjectsLengthByRoleID/{roleID}/{trlID}' , 'getProjectsLengthByRoleID')->name('getProjectsLengthByRoleID');
});

Route::controller(LocationController::class)->group(function(){
    Route::get('/locationsPage', 'index')->name('locationsPage');
    Route::get('/locationForm' , 'locationPage')->name('locationForm');
    Route::get('/addLocation' , 'addPage')->name('addLocation');
    Route::post('/locationCreate' , 'create')->name('locationCreate');
    Route::get('/locationRead/{id}' , 'read')->name('locationRead');
    Route::get('/locationUpdatePage/{id}' , 'updatePage')->name('locationUpdatePage');
    Route::post('/locationUpdate' , 'update')->name('locationUpdate');
    Route::get('/locationDelete/{id}' , 'delete')->name('locationDelete');
    Route::get('/location-clicking/{id}', 'locationsClickingPage')->name('locationsClickingPage');
    Route::get('/getProjectsLengthByLocationID/{locationID}/{trlID}' , 'getProjectsLengthByLocationID')->name('getProjectsLengthByLocationID');
});

Route::controller(MissionTypeController::class)->group(function(){
    Route::get('/mission-type', 'index')->name('missionTypePage');
    Route::get('/missionTypeForm' , 'missionTypePage')->name('missionTypeForm');
    Route::get('/addMissionType' , 'addPage')->name('addMissionType');
    Route::post('/missionTypeCreate' , 'create')->name('missionTypeCreate');
    Route::get('/missionTypeRead/{id}' , 'read')->name('missionTypeRead');
    Route::get('/missionTypeUpdatePage/{id}' , 'updatePage')->name('missionTypeUpdatePage');
    Route::post('/missionTypeUpdate' , 'update')->name('missionTypeUpdate');
    Route::get('/missionTypeDelete/{id}' , 'delete')->name('missionTypeDelete');
    Route::get('/mission-type-clicking/{id}' , 'missionTypeClickingPage')->name('missionTypeClickingPage');
    Route::get('/getProjectsLengthByMissionID/{missionID}/{trlID}' , 'getProjectsLengthByMissionID')->name('getProjectsLengthByMissionID');
});

Route::controller(OrganizationTypeController::class)->group(function(){
    Route::get('/organizationTypePage' , 'organizationTypePage')->name('organizationTypePage');
    Route::get('/addOrganizationType' , 'addPage')->name('addOrganizationType');
    Route::post('/organizationTypeCreate' , 'create')->name('organizationTypeCreate');
    Route::get('/organizationTypeRead/{id}' , 'read')->name('organizationTypeRead');
    Route::get('/organizationTypeUpdatePage/{id}' , 'updatePage')->name('organizationTypeUpdatePage');
    Route::post('/organizationTypeUpdate' , 'update')->name('organizationTypeUpdate');
    Route::get('/organizationTypeDelete/{id}' , 'delete')->name('organizationTypeDelete');
});

Route::controller(PriorityController::class)->group(function(){
    Route::get('/priorityPage' , 'priorityPage')->name('priorityPage');
    Route::get('/addPriority' , 'addPage')->name('addPriority');
    Route::post('/priorityCreate' , 'create')->name('priorityCreate');
    Route::get('/priorityRead/{id}' , 'read')->name('priorityRead');
    Route::get('/priorityUpdatePage/{id}' , 'updatePage')->name('priorityUpdatePage');
    Route::post('/priorityUpdate' , 'update')->name('priorityUpdate');
    Route::get('/priorityDelete/{id}' , 'delete')->name('priorityDelete');
});

Route::controller(ReferenceController::class)->group(function(){
    Route::get('/referencePage' , 'referencePage')->name('referencePage');
    Route::get('/addReference' , 'addPage')->name('addReference');
    Route::post('/referenceCreate' , 'create')->name('referenceCreate');
    Route::get('/referenceRead/{id}' , 'read')->name('referenceRead');
    Route::get('/referenceUpdatePage/{id}' , 'updatePage')->name('referenceUpdatePage');
    Route::post('/referenceUpdate' , 'update')->name('referenceUpdate');
    Route::get('/referenceDelete/{id}' , 'delete')->name('referenceDelete');
});

Route::controller(TechAreaController::class)->group(function(){
    Route::get('/techAreaPage' , 'techAreaPage')->name('techAreaPage');
    Route::get('/addTechArea' , 'addPage')->name('addTechArea');
    Route::post('/techAreaCreate' , 'create')->name('techAreaCreate');
    Route::get('/techAreaRead/{id}' , 'read')->name('techAreaRead');
    Route::get('/techAreaUpdatePage/{id}' , 'updatePage')->name('techAreaUpdatePage');
    Route::post('/techAreaUpdate' , 'update')->name('techAreaUpdate');
    Route::get('/techAreaDelete/{id}' , 'delete')->name('techAreaDelete');
    Route::get('/searchProjectsByTechArea/{id}' , 'searchProjectsByTechArea')->name('searchProjectsByTechArea');
    Route::post('/fetchDataFromApi' , 'fetchDataFromApi')->name('fetchDataFromApi');
});

Route::controller(TechSectorController::class)->group(function(){
    Route::get('/techSectorPage' , 'techSectorPage')->name('techSectorPage');
    Route::get('/addTechSector' , 'addPage')->name('addTechSector');
    Route::post('/techSectorCreate' , 'create')->name('techSectorCreate');
    Route::get('/techSectorRead/{id}' , 'read')->name('techSectorRead');
    Route::get('/techSectorUpdatePage/{id}' , 'updatePage')->name('techSectorUpdatePage');
    Route::post('/techSectorUpdate' , 'update')->name('techSectorUpdate');
    Route::get('/techSectorDelete/{id}' , 'delete')->name('techSectorDelete');
    Route::get('/searchProjectsByTechSector/{id}' , 'searchProjectsByTechSector')->name('searchProjectsByTechSector');
});

Route::controller(TechSubSectorController::class)->group(function(){
    Route::get('/techSubSectorPage' , 'techSubSectorPage')->name('techSubSectorPage');
    Route::get('/addTechSubSector' , 'addPage')->name('addTechSubSector');
    Route::post('/techSubSectorCreate' , 'create')->name('techSubSectorCreate');
    Route::get('/techSubSectorRead/{id}' , 'read')->name('techSubSectorRead');
    Route::get('/techSubSectorUpdatePage/{id}' , 'updatePage')->name('techSubSectorUpdatePage');
    Route::post('/techSubSectorUpdate' , 'update')->name('techSubSectorUpdate');
    Route::get('/techSubSectorDelete/{id}' , 'delete')->name('techSubSectorDelete');
    Route::get('/searchProjectsByTechNiche/{id}' , 'searchProjectsByTechNiche')->name('searchProjectsByTechNiche');
});

Route::controller(TechnologyController::class)->group(function(){
    Route::get('/technologyPage' , 'technologyPage')->name('technologyPage');
    Route::get('/addTechnology' , 'addPage')->name('addTechnology');
    Route::post('/technologyCreate' , 'create')->name('technologyCreate');
    Route::get('/technologyRead/{id}' , 'read')->name('technologyRead');
    Route::get('/technologyUpdatePage/{id}' , 'updatePage')->name('technologyUpdatePage');
    Route::post('/technologyUpdate' , 'update')->name('technologyUpdate');
    Route::get('/technologyDelete/{id}' , 'delete')->name('technologyDelete');
});

Route::controller(TrlController::class)->group(function(){
    Route::get('/trlPage' , 'trlPage')->name('trlPage');
    Route::get('/addTrl' , 'addPage')->name('addTrl');
    Route::post('/trlCreate' , 'create')->name('trlCreate');
    Route::get('/trlRead/{id}' , 'read')->name('trlRead');
    Route::get('/trlUpdatePage/{id}' , 'updatePage')->name('trlUpdatePage');
    Route::post('/trlUpdate' , 'update')->name('trlUpdate');
    Route::get('/trlDelete/{id}' , 'delete')->name('trlDelete');
});

Route::controller(TechReferredController::class)->group(function(){
    Route::get('/techPage' ,'techPage')->name('techPage');
    Route::post('/techreferredCreate' , 'create')->name('techreferredCreate');
    Route::get('/getTechArea' ,'getTechAreas')->name('getTechArea');
    Route::get('/techReferredUpdatePage/{id}' , 'updatePage')->name('techReferredUpdatePage');
    Route::post('/techReferredUpdate' , 'update')->name('techReferredUpdate');
});

Route::controller(ProjectTechnologyController::class)->group(function(){
    Route::get('/projectTechnologyPage' , 'projectTechnologyPage')->name('projectTechnologyPage');
    Route::get('/addProjectTechnology' , 'addPage')->name('addProjectTechnology');
    Route::post('/projectTechnologyCreate' , 'create')->name('projectTechnologyCreate');
    Route::get('/projectTechnologyRead/{id}' , 'read')->name('projectTechnologyRead');
    Route::get('/projectTechnologyUpdatePage/{id}' , 'updatePage')->name('projectTechnologyUpdatePage');
    Route::post('/projectTechnologyUpdate' , 'update')->name('projectTechnologyUpdate');
    Route::get('/projectTechnologyDelete/{id}' , 'delete')->name('projectTechnologyDelete');
});

Route::controller(OrgPerformingWorkController::class)->group(function(){
    Route::get('/orgPerformingWorkPage' , 'orgPerformingWorkPage')->name('orgPerformingWorkPage');
    Route::get('/addOrgPerformingWork' , 'addPage')->name('addOrgPerformingWork');
    Route::post('/orgPerformingWorkCreate' , 'create')->name('orgPerformingWorkCreate');
    Route::get('/orgPerformingWorkRead/{id}' , 'read')->name('orgPerformingWorkRead');
    Route::get('/orgPerformingWorkUpdatePage/{id}' , 'updatePage')->name('orgPerformingWorkUpdatePage');
    Route::post('/orgPerformingWorkUpdate' , 'update')->name('orgPerformingWorkUpdate');
    Route::get('/orgPerformingWorkDelete/{id}' , 'delete')->name('orgPerformingWorkDelete');
    Route::get('/organizations' , 'index')->name('organizationsPage');
    Route::get('/organization-clicking/{id}', 'organizationClickingPage')->name('organizationClickingPage');
    Route::get('/getProjectsLengthByOrgID/{orgID}/{trlID}' , 'getProjectsLengthByOrgID')->name('getProjectsLengthByOrgID');
});

Route::controller(ProjectOrganizationController::class)->group(function(){
    Route::get('/projectOrganizationPage' , 'projectOrganizationPage')->name('projectOrganizationPage');
    Route::get('/addProjectOrganization' , 'addPage')->name('addProjectOrganization');
    Route::post('/projectOrganizationCreate' , 'create')->name('projectOrganizationCreate');
    Route::get('/projectOrganizationRead/{id}' , 'read')->name('projectOrganizationRead');
    Route::get('/projectOrganizationUpdatePage/{id}' , 'updatePage')->name('projectOrganizationUpdatePage');
    Route::post('/projectOrganizationUpdate' , 'update')->name('projectOrganizationUpdate');
    Route::get('/projectOrganizationDelete/{id}' , 'delete')->name('projectOrganizationDelete');
});

Route::controller(OrganizationUnitController::class)->group(function(){
    Route::get('/organizationUnitPage' , 'organizationUnitPage')->name('organizationUnitPage');
    Route::get('/addOrganizationUnit' , 'addPage')->name('addOrganizationUnit');
    Route::post('/organizationUnitCreate' , 'create')->name('organizationUnitCreate');
    Route::get('/organizationUnitRead/{id}' , 'read')->name('organizationUnitRead');
    Route::get('/organizationUnitUpdatePage/{id}' , 'updatePage')->name('organizationUnitUpdatePage');
    Route::post('/organizationUnitUpdate' , 'update')->name('organizationUnitUpdate');
    Route::get('/organizationUnitDelete/{id}' , 'delete')->name('organizationUnitDelete');
});

Route::controller(Ref_OrganizationUnitController::class)->group(function(){
    Route::get('/ref_OrganizationUnitPage' , 'ref_OrganizationUnitPage')->name('ref_OrganizationUnitPage');
    Route::get('/addRef_OrganizationUnit' , 'addPage')->name('addRef_OrganizationUnit');
    Route::post('/ref_OrganizationUnitCreate' , 'create')->name('ref_OrganizationUnitCreate');
    Route::get('/ref_OrganizationUnitRead/{id}' , 'read')->name('ref_OrganizationUnitRead');
    Route::get('/ref_OrganizationUnitUpdatePage/{id}' , 'updatePage')->name('ref_OrganizationUnitUpdatePage');
    Route::post('/ref_OrganizationUnitUpdate' , 'update')->name('ref_OrganizationUnitUpdate');
    Route::get('/ref_OrganizationUnitDelete/{id}' , 'delete')->name('ref_OrganizationUnitDelete');
});

Route::controller(RequirementController::class)->group(function(){
    Route::get('/requirementPage' , 'requirementPage')->name('requirementPage');
    Route::get('/addRequirement' , 'addPage')->name('addRequirement');
    Route::post('/requirementCreate' , 'create')->name('requirementCreate');
    Route::get('/requirementRead/{id}' , 'read')->name('requirementRead');
    Route::get('/requirementUpdatePage/{id}' , 'updatePage')->name('requirementUpdatePage');
    Route::post('/requirementUpdate' , 'update')->name('requirementUpdate');
    Route::get('/requirementDelete/{id}' , 'delete')->name('requirementDelete');
});

Route::controller(Ref_EquipmentController::class)->group(function(){
    Route::get('/ref_EquipmentPage' , 'ref_EquipmentPage')->name('ref_EquipmentPage');
    Route::get('/addRef_Equipment' , 'addPage')->name('addRef_Equipment');
    Route::post('/ref_EquipmentCreate' , 'create')->name('ref_EquipmentCreate');
    Route::get('/ref_EquipmentRead/{id}' , 'read')->name('ref_EquipmentRead');
    Route::get('/ref_EquipmentUpdatePage/{id}' , 'updatePage')->name('ref_EquipmentUpdatePage');
    Route::post('/ref_EquipmentUpdate' , 'update')->name('ref_EquipmentUpdate');
    Route::get('/ref_EquipmentDelete/{id}' , 'delete')->name('ref_EquipmentDelete');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/productPage' , 'productPage')->name('productPage');
    Route::get('/addProduct' , 'addPage')->name('addProduct');
    Route::post('/productCreate' , 'create')->name('productCreate');
    Route::get('/productRead/{id}' , 'read')->name('productRead');
    Route::get('/productUpdatePage/{id}' , 'updatePage')->name('rproductUpdatePage');
    Route::post('/productUpdate' , 'update')->name('productUpdate');
    Route::get('/productDelete/{id}' , 'delete')->name('productDelete');
});