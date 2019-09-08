<?php
namespace OmniFlow
{
/*
 * 

 */
class MenusView
{
    static function displayMenus($localMenus=array(),$maximize=true)
{
    $user=  Context::getUser();
    self::getJavaScript($maximize);
    self::getMenusBootstrap($user,$localMenus); 
//    self::getMenus($user,$localMenus); 
}
public static function getJavaScript($maximize)
{


}
public static function buildMenus($user,$localMenus)
{
    
    $menu=Array();
    
        //  action, Title , current ,children
    if ($user->can('design') || $user->can('view_design') || $user->can('model') || $user->can('view_model')) { 
	$menus[]=Array("process.show", "Processes", false); 
    } 
    
	$menus[]=Array("task.dashboard", "Dashboard", false);

        $menus[]=Array("case.list", "Cases", false ); /*, Array(
            Array( "case.list", "List", false),
            Array("case.query", "Query", false))); */
    
    if ($user->can('admin')) {

	$menus[]=Array("Admin", "Admin", false, Array(
                Array("admin.listEvents", "List Events", false),
                Array("admin.resetCaseData", "Reset Case Data", false),
                Array("admin.installDB", "Reset All Data", false)));
        
        $menus[]=Array("#help", "Help", false);
    } 
    return $menus;
}
public static function getMenus($user,$localMenus)
{
}
public static function getMenusBootstrap($user,$localMenus)
{
    $menus=self::buildMenus($user, $localMenus);

}
static function displayMenus2()
{

}
}
} 
?>