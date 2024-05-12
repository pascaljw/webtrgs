<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes([
    'register' => false,
    // 'verify' => true
]);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/user', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('user');

    Route::get('/admin/user/data', [App\Http\Controllers\Backend\UserController::class, 'datatable'])->name('user.data');
    Route::get('/admin/user/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('user.create');
    Route::post('/admin/user/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('user.store');
    Route::put('/admin/user/{id}/update', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('user.update');
    Route::get('/admin/user/{id}/edit', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('user.edit');
    Route::get('/admin/user/{id}/delete', [App\Http\Controllers\Backend\UserController::class, 'delete'])->name('user.delete');

    Route::get('/admin/announcement', [App\Http\Controllers\Backend\AnnouncementController::class, 'index'])->name('announcement');
    Route::get('/admin/announcement/data', [App\Http\Controllers\Backend\AnnouncementController::class, 'datatable'])->name('announcement.data');
    Route::get('/admin/announcement/create', [App\Http\Controllers\Backend\AnnouncementController::class, 'create'])->name('announcement.create');
    Route::post('/admin/announcement/store', [App\Http\Controllers\Backend\AnnouncementController::class, 'store'])->name('announcement.store');
    Route::put('/admin/announcement/{id}/update', [App\Http\Controllers\Backend\AnnouncementController::class, 'update'])->name('announcement.update');
    Route::get('/admin/announcement/{id}/edit', [App\Http\Controllers\Backend\AnnouncementController::class, 'edit'])->name('announcement.edit');
    Route::get('/admin/announcement/{id}/delete', [App\Http\Controllers\Backend\AnnouncementController::class, 'delete'])->name('announcement.delete');

    Route::get('/admin/contact', [App\Http\Controllers\Backend\ContactController::class, 'index'])->name('contact');
    Route::get('/admin/contact/create', [App\Http\Controllers\Backend\ContactController::class, 'create'])->name('contact.create');
    Route::post('/admin/contact/store', [App\Http\Controllers\Backend\ContactController::class, 'store'])->name('contact.store');
    Route::put('/admin/contact/{id}/update', [App\Http\Controllers\Backend\ContactController::class, 'update'])->name('contact.update');

    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin/category', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('category');
    Route::post('/admin/category/store', [App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('category.store');
    Route::get('/admin/category/{id}/edit', [App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/admin/category/{id}/update', [App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('category.update');
    Route::get('/admin/category/{id}/delete', [App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/admin/category/data', [App\Http\Controllers\Backend\CategoryController::class, 'datatable'])->name('category.data');

    Route::get('/admin/blog', [App\Http\Controllers\Backend\BlogController::class, 'index'])->name('blog');
    Route::get('/admin/blog/create', [App\Http\Controllers\Backend\BlogController::class, 'create'])->name('blog.create');
    Route::post('/admin/blog/store', [App\Http\Controllers\Backend\BlogController::class, 'store'])->name('blog.store');
    Route::get('/admin/blog/data', [App\Http\Controllers\Backend\BlogController::class, 'datatable'])->name('blog.data');
    Route::get('/admin/blog/{id}/delete', [App\Http\Controllers\Backend\BlogController::class, 'delete'])->name('blog.delete');
    Route::get('/admin/blog/{id}/edit', [App\Http\Controllers\Backend\BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/admin/blog/{id}/update', [App\Http\Controllers\Backend\BlogController::class, 'update'])->name('blog.update');

    Route::get('/admin/team', [App\Http\Controllers\Backend\TeamController::class, 'index'])->name('team');
    Route::get('/admin/team/data', [App\Http\Controllers\Backend\TeamController::class, 'datatable'])->name('team.data');
    Route::get('/admin/team/create', [App\Http\Controllers\Backend\TeamController::class, 'create'])->name('team.create');
    Route::post('/admin/team/store', [App\Http\Controllers\Backend\TeamController::class, 'store'])->name('team.store');
    Route::put('/admin/team/{id}/update', [App\Http\Controllers\Backend\TeamController::class, 'update'])->name('team.update');
    Route::get('/admin/team/{id}/edit', [App\Http\Controllers\Backend\TeamController::class, 'edit'])->name('team.edit');
    Route::get('/admin/team/{id}/delete', [App\Http\Controllers\Backend\TeamController::class, 'delete'])->name('team.delete');

    // Route::get('/admin/document', [App\Http\Controllers\Backend\DocumentController::class, 'index'])->name('document');
    // Route::get('/admin/document/data', [App\Http\Controllers\Backend\DocumentController::class, 'datatable'])->name('document.data');
    // Route::get('/admin/document/create', [App\Http\Controllers\Backend\DocumentController::class, 'create'])->name('document.create');
    // Route::post('/admin/document/store', [App\Http\Controllers\Backend\DocumentController::class, 'store'])->name('document.store');
    // Route::put('/admin/document/{id}/update', [App\Http\Controllers\Backend\DocumentController::class, 'update'])->name('document.update');
    // Route::get('/admin/document/{id}/edit', [App\Http\Controllers\Backend\DocumentController::class, 'edit'])->name('document.edit');
    // Route::get('/admin/document/{id}/delete', [App\Http\Controllers\Backend\DocumentController::class, 'delete'])->name('document.delete');

    // Route::get('/admin/job', [App\Http\Controllers\Backend\JobController::class, 'index'])->name('job');
    // Route::get('/admin/job/create', [App\Http\Controllers\Backend\JobController::class, 'create'])->name('job.create');
    // Route::post('/admin/job/store', [App\Http\Controllers\Backend\JobController::class, 'store'])->name('job.store');
    // Route::put('/admin/job/{id}/update', [App\Http\Controllers\Backend\JobController::class, 'update'])->name('job.update');

    // Route::get('/admin/graduation', [App\Http\Controllers\Backend\GraduationController::class, 'index'])->name('graduation');
    // Route::get('/admin/graduation/create', [App\Http\Controllers\Backend\GraduationController::class, 'create'])->name('graduation.create');
    // Route::post('/admin/graduation/store', [App\Http\Controllers\Backend\GraduationController::class, 'store'])->name('graduation.store');
    // Route::put('/admin/graduation/{id}/update', [App\Http\Controllers\Backend\GraduationController::class, 'update'])->name('graduation.update');

    // Route::get('/admin/leave', [App\Http\Controllers\Backend\LeaveController::class, 'index'])->name('leave');
    // Route::get('/admin/leave/create', [App\Http\Controllers\Backend\LeaveController::class, 'create'])->name('leave.create');
    // Route::post('/admin/leave/store', [App\Http\Controllers\Backend\LeaveController::class, 'store'])->name('leave.store');
    // Route::put('/admin/leave/{id}/update', [App\Http\Controllers\Backend\LeaveController::class, 'update'])->name('leave.update');

    // Route::get('/admin/repository', [App\Http\Controllers\Backend\RepositoryController::class, 'index'])->name('repository');
    // Route::get('/admin/repository/create', [App\Http\Controllers\Backend\RepositoryController::class, 'create'])->name('repository.create');
    // Route::post('/admin/repository/store', [App\Http\Controllers\Backend\RepositoryController::class, 'store'])->name('repository.store');
    // Route::put('/admin/repository/{id}/update', [App\Http\Controllers\Backend\RepositoryController::class, 'update'])->name('repository.update');

    Route::get('/admin/research', [App\Http\Controllers\Backend\ResearchController::class, 'index'])->name('research');
    Route::get('/admin/research/create', [App\Http\Controllers\Backend\ResearchController::class, 'create'])->name('research.create');
    Route::post('/admin/research/store', [App\Http\Controllers\Backend\ResearchController::class, 'store'])->name('research.store');
    Route::put('/admin/research/{id}/update', [App\Http\Controllers\Backend\ResearchController::class, 'update'])->name('research.update');

    Route::get('/admin/organization', [App\Http\Controllers\Backend\OrganizationController::class, 'index'])->name('organization');
    Route::get('/admin/organization/create', [App\Http\Controllers\Backend\OrganizationController::class, 'create'])->name('organization.create');
    Route::post('/admin/organization/store', [App\Http\Controllers\Backend\OrganizationController::class, 'store'])->name('organization.store');
    Route::put('/admin/organization/{id}/update', [App\Http\Controllers\Backend\OrganizationController::class, 'update'])->name('organization.update');

    Route::get('/admin/scholarship', [App\Http\Controllers\Backend\ScholarshipController::class, 'index'])->name('scholarship');
    Route::get('/admin/scholarship/create', [App\Http\Controllers\Backend\ScholarshipController::class, 'create'])->name('scholarship.create');
    Route::post('/admin/scholarship/store', [App\Http\Controllers\Backend\ScholarshipController::class, 'store'])->name('scholarship.store');
    Route::put('/admin/scholarship/{id}/update', [App\Http\Controllers\Backend\ScholarshipController::class, 'update'])->name('scholarship.update');

    // Route::get('/admin/tuition', [App\Http\Controllers\Backend\TuitionController::class, 'index'])->name('tuition');
    // Route::get('/admin/tuition/create', [App\Http\Controllers\Backend\TuitionController::class, 'create'])->name('tuition.create');
    // Route::post('/admin/tuition/store', [App\Http\Controllers\Backend\TuitionController::class, 'store'])->name('tuition.store');
    // Route::put('/admin/tuition/{id}/update', [App\Http\Controllers\Backend\TuitionController::class, 'update'])->name('tuition.update');

    // Route::get('/admin/service', [App\Http\Controllers\Backend\ServiceController::class, 'index'])->name('service');
    // Route::get('/admin/service/create', [App\Http\Controllers\Backend\ServiceController::class, 'create'])->name('service.create');
    // Route::post('/admin/service/store', [App\Http\Controllers\Backend\ServiceController::class, 'store'])->name('service.store');
    // Route::put('/admin/service/{id}/update', [App\Http\Controllers\Backend\ServiceController::class, 'update'])->name('service.update');

    Route::get('/admin/faq', [App\Http\Controllers\Backend\FaqController::class, 'index'])->name('faq');
    Route::get('/admin/faq/data', [App\Http\Controllers\Backend\FaqController::class, 'datatable'])->name('faq.data');
    Route::get('/admin/faq/create', [App\Http\Controllers\Backend\FaqController::class, 'create'])->name('faq.create');
    Route::post('/admin/faq/store', [App\Http\Controllers\Backend\FaqController::class, 'store'])->name('faq.store');
    Route::put('/admin/faq/{id}/update', [App\Http\Controllers\Backend\FaqController::class, 'update'])->name('faq.update');
    Route::get('/admin/faq/{id}/edit', [App\Http\Controllers\Backend\FaqController::class, 'edit'])->name('faq.edit');
    Route::get('/admin/faq/{id}/delete', [App\Http\Controllers\Backend\FaqController::class, 'delete'])->name('faq.delete');

    Route::get('/admin/story', [App\Http\Controllers\Backend\StoryController::class, 'index'])->name('story');
    Route::get('/admin/story/create', [App\Http\Controllers\Backend\StoryController::class, 'create'])->name('story.create');
    Route::post('/admin/story/store', [App\Http\Controllers\Backend\StoryController::class, 'store'])->name('story.store');
    Route::put('/admin/story/{id}/update', [App\Http\Controllers\Backend\StoryController::class, 'update'])->name('story.update');

    Route::get('/admin/vision', [App\Http\Controllers\Backend\VisionController::class, 'index'])->name('vision');
    Route::get('/admin/vision/create', [App\Http\Controllers\Backend\VisionController::class, 'create'])->name('vision.create');
    Route::post('/admin/vision/store', [App\Http\Controllers\Backend\VisionController::class, 'store'])->name('vision.store');
    Route::put('/admin/vision/{id}/update', [App\Http\Controllers\Backend\VisionController::class, 'update'])->name('vision.update');

    Route::get('/admin/structure', [App\Http\Controllers\Backend\StructureController::class, 'index'])->name('structure');
    Route::get('/admin/structure/create', [App\Http\Controllers\Backend\StructureController::class, 'create'])->name('structure.create');
    Route::post('/admin/structure/store', [App\Http\Controllers\Backend\StructureController::class, 'store'])->name('structure.store');
    Route::put('/admin/structure/{id}/update', [App\Http\Controllers\Backend\StructureController::class, 'update'])->name('structure.update');

    Route::get('/admin/acreditation', [App\Http\Controllers\Backend\AcreditationController::class, 'index'])->name('acreditation');
    Route::get('/admin/acreditation/create', [App\Http\Controllers\Backend\AcreditationController::class, 'create'])->name('acreditation.create');
    Route::post('/admin/acreditation/store', [App\Http\Controllers\Backend\AcreditationController::class, 'store'])->name('acreditation.store');
    Route::put('/admin/acreditation/{id}/update', [App\Http\Controllers\Backend\AcreditationController::class, 'update'])->name('acreditation.update');

    Route::get('/admin/slider', [App\Http\Controllers\Backend\SliderController::class, 'index'])->name('slider');
    Route::get('/admin/slider/data', [App\Http\Controllers\Backend\SliderController::class, 'datatable'])->name('slider.data');
    Route::get('/admin/slider/create', [App\Http\Controllers\Backend\SliderController::class, 'create'])->name('slider.create');
    Route::post('/admin/slider/store', [App\Http\Controllers\Backend\SliderController::class, 'store'])->name('slider.store');
    Route::put('/admin/slider/{id}/update', [App\Http\Controllers\Backend\SliderController::class, 'update'])->name('slider.update');
    Route::get('/admin/slider/{id}/edit', [App\Http\Controllers\Backend\SliderController::class, 'edit'])->name('slider.edit');
    Route::get('/admin/slider/{id}/delete', [App\Http\Controllers\Backend\SliderController::class, 'delete'])->name('slider.delete');

    // Route::get('/admin/curriculum', [App\Http\Controllers\Backend\CurriculumController::class, 'index'])->name('curriculum');
    // Route::get('/admin/curriculum/data', [App\Http\Controllers\Backend\CurriculumController::class, 'datatable'])->name('curriculum.data');
    // Route::get('/admin/curriculum/create', [App\Http\Controllers\Backend\CurriculumController::class, 'create'])->name('curriculum.create');
    // Route::post('/admin/curriculum/store', [App\Http\Controllers\Backend\CurriculumController::class, 'store'])->name('curriculum.store');
    // Route::post('/admin/curriculum/import', [App\Http\Controllers\Backend\CurriculumController::class, 'import'])->name('curriculum.import');
    // Route::put('/admin/curriculum/{id}/update', [App\Http\Controllers\Backend\CurriculumController::class, 'update'])->name('curriculum.update');
    // Route::get('/admin/curriculum/{id}/edit', [App\Http\Controllers\Backend\CurriculumController::class, 'edit'])->name('curriculum.edit');
    // Route::get('/admin/curriculum/{id}/delete', [App\Http\Controllers\Backend\CurriculumController::class, 'delete'])->name('curriculum.delete');

    Route::get('/admin/filter', [App\Http\Controllers\Backend\FilterController::class, 'index'])->name('filter');
    Route::post('/admin/filter/store', [App\Http\Controllers\Backend\FilterController::class, 'store'])->name('filter.store');
    Route::get('/admin/filter/{id}/edit', [App\Http\Controllers\Backend\FilterController::class, 'edit'])->name('filter.edit');
    Route::put('/admin/filter/{id}/update', [App\Http\Controllers\Backend\FilterController::class, 'update'])->name('filter.update');
    Route::get('/admin/filter/{id}/delete', [App\Http\Controllers\Backend\FilterController::class, 'delete'])->name('filter.delete');
    Route::get('/admin/filter/data', [App\Http\Controllers\Backend\FilterController::class, 'datatable'])->name('filter.data');

    Route::get('/admin/gallery', [App\Http\Controllers\Backend\GalleryController::class, 'index'])->name('gallery');
    Route::get('/admin/gallery/create', [App\Http\Controllers\Backend\GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/admin/gallery/store', [App\Http\Controllers\Backend\GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/admin/gallery/data', [App\Http\Controllers\Backend\GalleryController::class, 'datatable'])->name('gallery.data');
    Route::get('/admin/gallery/{id}/delete', [App\Http\Controllers\Backend\GalleryController::class, 'delete'])->name('gallery.delete');
    Route::get('/admin/gallery/{id}/edit', [App\Http\Controllers\Backend\GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/admin/gallery/{id}/update', [App\Http\Controllers\Backend\GalleryController::class, 'update'])->name('gallery.update');

    // Route::get('/admin/partner', [App\Http\Controllers\Backend\PartnerController::class, 'index'])->name('partner');
    // Route::get('/admin/partner/create', [App\Http\Controllers\Backend\PartnerController::class, 'create'])->name('partner.create');
    // Route::post('/admin/partner/store', [App\Http\Controllers\Backend\PartnerController::class, 'store'])->name('partner.store');
    // Route::get('/admin/partner/data', [App\Http\Controllers\Backend\PartnerController::class, 'datatable'])->name('partner.data');
    // Route::get('/admin/partner/{id}/delete', [App\Http\Controllers\Backend\PartnerController::class, 'delete'])->name('partner.delete');
    // Route::get('/admin/partner/{id}/edit', [App\Http\Controllers\Backend\PartnerController::class, 'edit'])->name('partner.edit');
    // Route::put('/admin/partner/{id}/update', [App\Http\Controllers\Backend\PartnerController::class, 'update'])->name('partner.update');

    // Tentang Kami //
    Route::resource('/admin/tentang', App\Http\Controllers\Backend\TentangKamiController::class, ['names' => 'admin.tentang']);

    Route::get('/admin/theses', [App\Http\Controllers\Backend\ThesesController::class, 'index'])->name('theses');
    Route::get('/admin/theses/create', [App\Http\Controllers\Backend\ThesesController::class, 'create'])->name('theses.create');
    Route::get('/admin/theses/{id}/edit', [App\Http\Controllers\Backend\ThesesController::class, 'edit'])->name('theses.edit');
    Route::put('/admin/theses/{id}/update', [App\Http\Controllers\Backend\ThesesController::class, 'update'])->name('theses.update');
    Route::post('/admin/theses/store', [App\Http\Controllers\Backend\ThesesController::class, 'store'])->name('theses.store');
    Route::get('/admin/theses/data', [App\Http\Controllers\Backend\ThesesController::class, 'datatable'])->name('theses.data');

    Route::get('/admin/hero', [App\Http\Controllers\Backend\HeroController::class, 'index'])->name('hero');
    Route::get('/admin/hero/create', [App\Http\Controllers\Backend\HeroController::class, 'create'])->name('hero.create');
    Route::post('/admin/hero/store', [App\Http\Controllers\Backend\HeroController::class, 'store'])->name('hero.store');
    Route::post('/admin/hero/delete/{id}', [App\Http\Controllers\Backend\HeroController::class, 'destroy'])->name('hero.delete');

});

Route::get('/', [SiteController::class, 'index'])->name('site.beranda');
Route::get('/visi-misi', [SiteController::class, 'visi_misi'])->name('site.visi_misi');
Route::get('/berita', [SiteController::class, 'berita'])->name('site.berita');
Route::get('/berita/show/{slug}', [SiteController::class, 'berita_show'])->name('site.berita.show');

Route::get('/data-dosen', [SiteController::class, 'data_dosen'])->name('site.data_dosen');
Route::get('/akreditasi', [SiteController::class, 'akreditasi'])->name('site.akreditasi');
Route::get('/repo', [SiteController::class, 'repo'])->name('site.repo');

Route::get('/curriculum', [SiteController::class, 'curriculum'])->name('site.curriculum');
Route::get('/documents', [SiteController::class, 'documents'])->name('site.documents');
Route::get('/documents/data', [App\Http\Controllers\Frontend\SiteController::class, 'datatables'])->name('site.documents.data');
Route::get('/teams/lecturer', [App\Http\Controllers\Frontend\SiteController::class, 'teamsLecturer'])->name('site.teams.lecturer');
Route::get('/teams/staff', [App\Http\Controllers\Frontend\SiteController::class, 'teamsStaff'])->name('site.teams.staff');
Route::get('/lecturer/{id}/detail', [App\Http\Controllers\Frontend\SiteController::class, 'teamDetail'])->name('site.team.detail');
Route::get('/staff/{id}/detail', [App\Http\Controllers\Frontend\SiteController::class, 'teamStaffDetail'])->name('site.teamStaff.detail');
Route::get('/contact', [App\Http\Controllers\Frontend\SiteController::class, 'contact'])->name('site.contact');
Route::get('/job', [App\Http\Controllers\Frontend\SiteController::class, 'job'])->name('site.job');
Route::get('/graduation', [App\Http\Controllers\Frontend\SiteController::class, 'graduation'])->name('site.graduation');
Route::get('/leave', [App\Http\Controllers\Frontend\SiteController::class, 'leave'])->name('site.leave');
Route::get('/repository', [App\Http\Controllers\Frontend\SiteController::class, 'repository'])->name('site.repository');
Route::get('/performance', [App\Http\Controllers\Frontend\SiteController::class, 'performance'])->name('site.performance');
Route::get('/research', [App\Http\Controllers\Frontend\SiteController::class, 'research'])->name('site.research');
Route::get('/organization', [App\Http\Controllers\Frontend\SiteController::class, 'organization'])->name('site.organization');
Route::get('/scholarship', [App\Http\Controllers\Frontend\SiteController::class, 'scholarship'])->name('site.scholarship');
Route::get('/tuition', [App\Http\Controllers\Frontend\SiteController::class, 'tuition'])->name('site.tuition');
Route::get('/service', [App\Http\Controllers\Frontend\SiteController::class, 'service'])->name('site.service');
Route::get('/faq', [App\Http\Controllers\Frontend\SiteController::class, 'faq'])->name('site.faq');
Route::get('/partners', [App\Http\Controllers\Frontend\SiteController::class, 'partner'])->name('site.partner');
Route::get('/story', [App\Http\Controllers\Frontend\SiteController::class, 'story'])->name('site.story');
Route::get('/vision', [App\Http\Controllers\Frontend\SiteController::class, 'vision'])->name('site.vision');
Route::get('/structure', [App\Http\Controllers\Frontend\SiteController::class, 'structure'])->name('site.structure');
Route::get('/acreditation', [App\Http\Controllers\Frontend\SiteController::class, 'acreditation'])->name('site.acreditation');
Route::get('/galleries', [App\Http\Controllers\Frontend\SiteController::class, 'gallery'])->name('site.gallery');
Route::get('/announcement', [App\Http\Controllers\Frontend\SiteController::class, 'announcement'])->name('site.announcement');
Route::get('/blogs', [App\Http\Controllers\Frontend\SiteController::class, 'blogs'])->name('site.blogs');
Route::get('/blogs/category/{id}', [App\Http\Controllers\Frontend\SiteController::class, 'blogFilterCategory'])->name('site.blogFilterCategory');
Route::get('/announcement/show/{slug}', [App\Http\Controllers\Frontend\SiteController::class, 'announcementDetail'])->name('site.announcementDetail');
Route::get('/laboratorium', [App\Http\Controllers\Frontend\SiteController::class, 'laboratorium'])->name('site.laboratorium');

Route::get('/{slug}', [App\Http\Controllers\Frontend\SiteController::class, 'blogDetail'])->name('site.blogDetail');
