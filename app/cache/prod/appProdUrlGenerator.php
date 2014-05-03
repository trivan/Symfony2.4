<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_category_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::listAction',    '_sonata_admin' => 'ibw.jobeet.admin.category',    '_sonata_name' => 'admin_ibw_jobeet_category_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/category/list',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_category_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::createAction',    '_sonata_admin' => 'ibw.jobeet.admin.category',    '_sonata_name' => 'admin_ibw_jobeet_category_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/category/create',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_category_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::batchAction',    '_sonata_admin' => 'ibw.jobeet.admin.category',    '_sonata_name' => 'admin_ibw_jobeet_category_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/category/batch',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::editAction',    '_sonata_admin' => 'ibw.jobeet.admin.category',    '_sonata_name' => 'admin_ibw_jobeet_category_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/category',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::deleteAction',    '_sonata_admin' => 'ibw.jobeet.admin.category',    '_sonata_name' => 'admin_ibw_jobeet_category_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/category',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::showAction',    '_sonata_admin' => 'ibw.jobeet.admin.category',    '_sonata_name' => 'admin_ibw_jobeet_category_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/category',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_category_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::exportAction',    '_sonata_admin' => 'ibw.jobeet.admin.category',    '_sonata_name' => 'admin_ibw_jobeet_category_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/category/export',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_job_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::listAction',    '_sonata_admin' => 'ibw.jobeet.admin.job',    '_sonata_name' => 'admin_ibw_jobeet_job_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/job/list',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_job_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::createAction',    '_sonata_admin' => 'ibw.jobeet.admin.job',    '_sonata_name' => 'admin_ibw_jobeet_job_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/job/create',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_job_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::batchAction',    '_sonata_admin' => 'ibw.jobeet.admin.job',    '_sonata_name' => 'admin_ibw_jobeet_job_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/job/batch',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_job_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::editAction',    '_sonata_admin' => 'ibw.jobeet.admin.job',    '_sonata_name' => 'admin_ibw_jobeet_job_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/job',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_job_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::deleteAction',    '_sonata_admin' => 'ibw.jobeet.admin.job',    '_sonata_name' => 'admin_ibw_jobeet_job_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/job',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_job_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::showAction',    '_sonata_admin' => 'ibw.jobeet.admin.job',    '_sonata_name' => 'admin_ibw_jobeet_job_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/job',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_job_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::exportAction',    '_sonata_admin' => 'ibw.jobeet.admin.job',    '_sonata_name' => 'admin_ibw_jobeet_job_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/job/export',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::listAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate/list',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::createAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate/create',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::batchAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate/batch',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::editAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::deleteAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::showAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::exportAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate/export',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_activate' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::activateAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_activate',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/activate',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate',    ),  ),  4 =>   array (  ),),
        'admin_ibw_jobeet_affiliate_deactivate' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::deactivateAction',    '_sonata_admin' => 'ibw.jobeet.admin.affiliate',    '_sonata_name' => 'admin_ibw_jobeet_affiliate_deactivate',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deactivate',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/jobeet/affiliate',    ),  ),  4 =>   array (  ),),
        'ibw_jobeet_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'ibw_job' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/',    ),  ),  4 =>   array (  ),),
        'ibw_job_show' => array (  0 =>   array (    0 => 'company',    1 => 'location',    2 => 'id',    3 => 'position',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'position',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'location',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'company',    ),    4 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'ibw_job_preview' => array (  0 =>   array (    0 => 'company',    1 => 'location',    2 => 'token',    3 => 'position',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::previewAction',  ),  2 =>   array (    'token' => '\\w+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'position',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\w+',      3 => 'token',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'location',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'company',    ),    4 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'ibw_job_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/new',    ),  ),  4 =>   array (  ),),
        'ibw_job_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/create',    ),  ),  4 =>   array (  ),),
        'ibw_job_publish' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::publishAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publish',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'ibw_job_edit' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'ibw_job_update' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'ibw_job_delete' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'ibw_job_extend' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::extendAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extend',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'ibw_jobeet_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'IbwJobeetBundle_category' => array (  0 =>   array (    0 => 'slug',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryController::showAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'IbwJobeetBundle_api' => array (  0 =>   array (    0 => 'token',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\ApiController::listAction',  ),  2 =>   array (    '_format' => 'xml|json|yaml',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'xml|json|yaml',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/jobs',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    3 =>     array (      0 => 'text',      1 => '/api',    ),  ),  4 =>   array (  ),),
        'ibw_affiliate_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affiliate/new',    ),  ),  4 =>   array (  ),),
        'ibw_affiliate_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affiliate/create',    ),  ),  4 =>   array (  ),),
        'ibw_affiliate_wait' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateController::waitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affiliate/wait',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
