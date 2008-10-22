<?php
/*
	*********************************************************************
	* -> www.phplogcon.org <-
	* -----------------------------------------------------------------
	*
	* Copyright (C) 2008 Adiscon GmbH.
	*
	* This file is part of phpLogCon.
	*
	* PhpLogCon is free software: you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation, either version 3 of the License, or
	* (at your option) any later version.
	*
	* PhpLogCon is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with phpLogCon. If not, see <http://www.gnu.org/licenses/>.
	*
	* A copy of the GPL can be found in the file "COPYING" in this
	* distribution.
	*********************************************************************
*/
global $content;

// Global Stuff
$content['LN_ADMINMENU_HOMEPAGE'] = "Back to Show Events";
$content['LN_ADMINMENU_GENOPT'] = "Preferences";
$content['LN_ADMINMENU_SOURCEOPT'] = "Sources";
$content['LN_ADMINMENU_VIEWSOPT'] = "Views";
$content['LN_ADMINMENU_SEARCHOPT'] = "Searches";
$content['LN_ADMINMENU_USEROPT'] = "Users";
$content['LN_ADMINMENU_GROUPOPT'] = "Groups";
$content['LN_ADMINMENU_CHARTOPT'] = "Charts";
$content['LN_ADMINMENU_FIELDOPT'] = "Fields";
$content['LN_ADMINMENU_MSGPARSERSOPT'] = "Message Parsers";
$content['LN_ADMIN_CENTER'] = "Admin center";
$content['LN_ADMIN_UNKNOWNSTATE'] = "Unknown State";
$content['LN_ADMIN_ERROR_NOTALLOWED'] = "You are not allowed to access this page with your user level.";
$content['LN_DELETEYES'] = "Yes";
$content['LN_DELETENO'] = "No";
$content['LN_GEN_ACTIONS'] = "Available Actions";
$content['LN_ADMIN_SEND'] = "Send changes";
$content['LN_GEN_USERONLY'] = "User only";
$content['LN_GEN_GROUPONLY'] = "Group only";
$content['LN_GEN_GLOBAL'] = "Global";
$content['LN_GEN_USERONLY_LONG'] = "For me only <br>(Only available to your user)";
$content['LN_GEN_GROUPONLY_LONG'] = "For this group <br>(Only available to the selected group)";
$content['LN_GEN_GROUPONLYNAME'] = "Group '%1'";


// General Options
$content['LN_ADMIN_GLOBFRONTEND'] = "Global frontend options";
$content['LN_ADMIN_USERFRONTEND'] = "User specific frontend options";
$content['LN_ADMIN_MISC'] = "Miscellaneous Options";
$content['LN_GEN_SHOWDEBUGMSG'] = "Show Debug messages";
$content['LN_GEN_DEBUGGRIDCOUNTER'] = "Show Debug Gridcounter";
$content['LN_GEN_SHOWPAGERENDERSTATS'] = "Show Pagerenderstats";
$content['LN_GEN_ENABLEGZIP'] = "Enable GZIP Compressed Output";
$content['LN_GEN_DEBUGUSERLOGIN'] = "Debug Userlogin";
$content['LN_GEN_WEBSTYLE'] = "Default selected style";
$content['LN_GEN_SELLANGUAGE'] = "Default selected language";
$content['LN_GEN_PREPENDTITLE'] = "Prepend this string in title";
$content['LN_GEN_USETODAY'] = "Use Today and Yesterday in timefields";
$content['LN_GEN_DETAILPOPUPS'] = "Use Popup to display the full messagedetails";
$content['LN_GEN_MSGCHARLIMIT'] = "Character limit of the message in main view";
$content['LN_GEN_STRCHARLIMIT'] = "Character display limit for all string type fields";
$content['LN_GEN_ENTRIESPERPAGE'] = "Number of entries per page";
$content['LN_GEN_AUTORELOADSECONDS'] = "Enable autoreload after seconds";
$content['LN_GEN_IPADRRESOLVE'] = "Resolve IP Addresses using DNS";
$content['LN_GEN_CUSTBTNCAPT'] = "Custom search caption";
$content['LN_GEN_CUSTBTNSRCH'] = "Custom search string";
$content['LN_GEN_SUCCESSFULLYSAVED'] = "The configuration Values have been successfully saved";
$content['LN_GEN_INTERNAL'] = "Internal";
$content['LN_GEN_DISABLED'] = "Function disabled";
$content['LN_GEN_CONFIGFILE'] = "Configuration File";
$content['LN_GEN_ACCESSDENIED'] = "Access denied to this function";
$content['LN_GEN_DEFVIEWS'] = "Default selected view";
$content['LN_GEN_DEFSOURCE'] = "Default selected source";
$content['LN_GEN_SUPPRESSDUPMSG'] = "Suppress duplicated messages";
$content['LN_GEN_OPTIONNAME'] = "Option name";
$content['LN_GEN_GLOBALVALUE'] = "Global value";
$content['LN_GEN_PERSONALVALUE'] = "Personal (User)value";
$content['LN_GEN_DISABLEUSEROPTIONS'] = "Click here to disable personal options";
$content['LN_GEN_ENABLEUSEROPTIONS'] = "Click here to enable personal options";
$content['LN_ADMIN_GLOBALONLY'] = "Global Options Only";
$content['LN_GEN_DEBUGTOSYSLOG'] = "Send Debug to local syslog server";
$content['LN_GEN_POPUPMENUTIMEOUT'] = "Popupmenu Timeout in milli seconds";
$content['LN_ADMIN_SCRIPTTIMEOUT'] = "PHP Script Timeout in seconds";

// User Center
$content['LN_USER_CENTER'] = "User Options";
$content['LN_USER_ID'] = "ID";
$content['LN_USER_NAME'] = "Username";
$content['LN_USER_ADD'] = "Add User";
$content['LN_USER_EDIT'] = "Edit User";
$content['LN_USER_DELETE'] = "Delete User";
$content['LN_USER_PASSWORD1'] = "Password";
$content['LN_USER_PASSWORD2'] = "Confirm Password";
$content['LN_USER_ERROR_IDNOTFOUND'] = "Error, User with ID '%1' , was not found";
$content['LN_USER_ERROR_DONOTDELURSLF'] = "Error, you can not DELETE YOURSELF!";
$content['LN_USER_ERROR_DELUSER'] = "Deleting of the user with id '%1' failed!";
$content['LN_USER_ERROR_INVALIDID'] = "Error, invalid ID, User not found";
$content['LN_USER_ERROR_HASBEENDEL'] = "The User '%1' has been successfully deleted!";
$content['LN_USER_ERROR_USEREMPTY'] = "Error, Username was empty";
$content['LN_USER_ERROR_USERNAMETAKEN'] = "Error, this Username is already taken!";
$content['LN_USER_ERROR_PASSSHORT'] = "Error, Password was to short, or did not match";
$content['LN_USER_ERROR_HASBEENADDED'] = "User '%1' has been successfully added";
$content['LN_USER_ERROR_HASBEENEDIT'] = "User '%1' has been successfully edited";
$content['LN_USER_ISADMIN'] = "Is Admin?";
$content['LN_USER_ADDEDIT'] = "Add/Edit User";
$content['LN_USER_WARNREMOVEADMIN'] = "You are about to revoke your own administrative priviledges. Are you sure to remove your admin status?";
$content['LN_USER_WARNDELETEUSER'] = "Are you sure that you want to delete the User '%1'? All his personal settings will be deleted as well.";
$content['LN_USER_ERROR_INVALIDSESSIONS'] = "Invalid User Session.";
$content['LN_USER_'] = "";

// Group center
$content['LN_GROUP_CENTER'] = "Group Center";
$content['LN_GROUP_ID'] = "ID";
$content['LN_GROUP_NAME'] = "Groupname";
$content['LN_GROUP_DESCRIPTION'] = "Groupdescription";
$content['LN_GROUP_TYPE'] = "Grouptype";
$content['LN_GROUP_ADD'] = "Add Group";
$content['LN_GROUP_EDIT'] = "Edit Group";
$content['LN_GROUP_DELETE'] = "Delete Group";
$content['LN_GROUP_NOGROUPS'] = "No groups have been added yet";
$content['LN_GROUP_ADDEDIT'] = "Add/Edit Group";
$content['LN_GROUP_ERROR_GROUPEMPTY'] = "The groupname cannot be empty.";
$content['LN_GROUP_ERROR_GROUPNAMETAKEN'] = "The groupname has already been taken.";
$content['LN_GROUP_HASBEENADDED'] = "The group '%1' has been successfully added.";
$content['LN_GROUP_ERROR_IDNOTFOUND'] = "The group with ID '%1' could not be found.";
$content['LN_GROUP_ERROR_HASBEENEDIT'] = "The group '%1' has been successfully edited.";
$content['LN_GROUP_ERROR_INVALIDGROUP'] = "Error, invalid ID, Group not found";
$content['LN_GROUP_WARNDELETEGROUP'] = "Are you sure that you want to delete the Group '%1'? All Groupsettings will be deleted as well.";
$content['LN_GROUP_ERROR_DELGROUP'] = "Deleting of the group with id '%1' failed!";
$content['LN_GROUP_ERROR_HASBEENDEL'] = "The Group '%1' has been successfully deleted!";
$content['LN_GROUP_MEMBERS'] = "Groupmembers: ";
$content['LN_GROUP_ADDUSER'] = "Add User to Group";
$content['LN_GROUP_ERROR_USERIDMISSING'] = "The userid is missing.";
$content['LN_GROUP_USERHASBEENADDEDGROUP'] = "The User '%1' has been successfully added to group '%2'";
$content['LN_GROUP_ERRORNOMOREUSERS'] = "There are no more available users who can be added to the group '%1'";
$content['LN_GROUP_USER_ADD'] = "Add User to the group";
$content['LN_GROUP_USERDELETE'] = "Remove a User from the group";
$content['LN_GROUP_ERRORNOUSERSINGROUP'] = "There are no users to remove in this the group '%1'";
$content['LN_GROUP_ERROR_REMUSERFROMGROUP'] = "The user '%1' could not be removed from the group '%2'";
$content['LN_GROUP_USERHASBEENREMOVED'] = "The user '%1' has been successfully removed from the group '%2'";
$content['LN_GROUP_'] = "";

// Custom Searches center
$content['LN_SEARCH_CENTER'] = "Custom Searches";
$content['LN_SEARCH_ADD'] = "Add new Custom Search";
$content['LN_SEARCH_ID'] = "ID";
$content['LN_SEARCH_NAME'] = "Search Name";
$content['LN_SEARCH_QUERY'] = "Search Query";
$content['LN_SEARCH_TYPE'] = "Assigned to";
$content['LN_SEARCH_EDIT'] = "Edit Custom Search";
$content['LN_SEARCH_DELETE'] = "Delete Custom Search";
$content['LN_SEARCH_ADDEDIT'] = "Add / Edit a Custom Search";
$content['LN_SEARCH_SELGROUPENABLE'] = ">> Select Group to enable <<";
$content['LN_SEARCH_ERROR_DISPLAYNAMEEMPTY'] = "The DisplayName cannot be empty.";
$content['LN_SEARCH_ERROR_SEARCHQUERYEMPTY'] = "The SearchQuery cannot be empty.";
$content['LN_SEARCH_HASBEENADDED'] = "The Custom Search '%1' has been successfully added.";
$content['LN_SEARCH_ERROR_IDNOTFOUND'] = "Could not find a search with ID '%1'.";
$content['LN_SEARCH_ERROR_INVALIDID'] = "Invalid search ID.";
$content['LN_SEARCH_HASBEENEDIT'] = "The Custom Search '%1' has been successfully edited.";
$content['LN_SEARCH_WARNDELETESEARCH'] = "Are you sure that you want to delete the Custom Search '%1'? This cannot be undone!";
$content['LN_SEARCH_ERROR_DELSEARCH'] = "Deleting of the Custom Search with id '%1' failed!";
$content['LN_SEARCH_ERROR_HASBEENDEL'] = "The Custom Search '%1' has been successfully deleted!";
$content['LN_SEARCH_'] = "";

// Custom Views center
$content['LN_VIEWS_CENTER'] = "Views Options";
$content['LN_VIEWS_ID'] = "ID";
$content['LN_VIEWS_NAME'] = "View Name";
$content['LN_VIEWS_COLUMNS'] = "View Columns";
$content['LN_VIEWS_TYPE'] = "Assigned to";
$content['LN_VIEWS_ADD'] = "Add new View";
$content['LN_VIEWS_EDIT'] = "Edit View";
$content['LN_VIEWS_ERROR_IDNOTFOUND'] = "A View with ID '%1' could not be found.";
$content['LN_VIEWS_ERROR_INVALIDID'] = "The View with ID '%1' is not a valid View.";
$content['LN_VIEWS_WARNDELETEVIEW'] = "Are you sure that you want to delete the View '%1'? This cannot be undone!";
$content['LN_VIEWS_ERROR_DELSEARCH'] = "Deleting of the View with id '%1' failed!";
$content['LN_VIEWS_ERROR_HASBEENDEL'] = "The View '%1' has been successfully deleted!";
$content['LN_VIEWS_ADDEDIT'] = "Add / Edit a View";
$content['LN_VIEWS_COLUMNLIST'] = "Configured Columns";
$content['LN_VIEWS_ADDCOLUMN'] = "Add Column into list";
$content['LN_VIEWS_ERROR_DISPLAYNAMEEMPTY'] = "The DisplayName cannot be empty.";
$content['LN_VIEWS_COLUMN'] = "Column";
$content['LN_VIEWS_COLUMN_REMOVE'] = "Remove Column";
$content['LN_VIEWS_HASBEENADDED'] = "The Custom View '%1' has been successfully added.";
$content['LN_VIEWS_ERROR_NOCOLUMNS'] = "You need to add at least one column in order to add a new Custom View.";
$content['LN_VIEWS_HASBEENEDIT'] = "The Custom Search '%1' has been successfully edited.";
$content['LN_VIEWS_'] = "";

// Custom Sources center
$content['LN_SOURCES_CENTER'] = "Sources Options";
$content['LN_SOURCES_EDIT'] = "Edit Source";
$content['LN_SOURCES_DELETE'] = "Delete Source";
$content['LN_SOURCES_ID'] = "ID";
$content['LN_SOURCES_NAME'] = "Source Name";
$content['LN_SOURCES_TYPE'] = "Source Type";
$content['LN_SOURCES_ASSIGNTO'] = "Assigned To";
$content['LN_SOURCES_DISK'] = "Diskfile";
$content['LN_SOURCES_DB'] = "MySQL Database";
$content['LN_SOURCES_PDO'] = "PDO Datasource";
$content['LN_SOURCES_ADD'] = "Add new Source";
$content['LN_SOURCES_ADDEDIT'] = "Add / Edit a Source";
$content['LN_SOURCES_TYPE'] = "Source Type";
$content['LN_SOURCES_DISKTYPEOPTIONS'] = "Diskfile related Options";
$content['LN_SOURCES_ERROR_MISSINGPARAM'] = "The paramater '%1' is missing.";
$content['LN_SOURCES_ERROR_NOTAVALIDFILE'] = "Failed to open the syslog file '%1'! Check if the file exists and phplogcon has sufficient rights to it";
$content['LN_SOURCES_ERROR_UNKNOWNSOURCE'] = "Unknown Source '%1' detected";
$content['LN_SOURCE_HASBEENADDED'] = "The new Source '%1' has been successfully added.";
$content['LN_SOURCES_EDIT'] = "Edit Source";
$content['LN_SOURCES_ERROR_INVALIDORNOTFOUNDID'] = "The Source-ID is invalid or could not be found.";
$content['LN_SOURCES_ERROR_IDNOTFOUND'] = "The Source-ID could not be found in the database.";
$content['LN_SOURCES_HASBEENEDIT'] = "The Source '%1' has been successfully edited.";
$content['LN_SOURCES_WARNDELETESEARCH'] = "Are you sure that you want to delete the Source '%1'? This cannot be undone!";
$content['LN_SOURCES_ERROR_DELSOURCE'] = "Deleting of the Source with id '%1' failed!";
$content['LN_SOURCES_ERROR_HASBEENDEL'] = "The Source '%1' has been successfully deleted!";
$content['LN_SOURCES_DESCRIPTION'] = "Source Description (Optional)";

// Database Upgrade
$content['LN_DBUPGRADE_TITLE'] = "phpLogCon Database Update";
$content['LN_DBUPGRADE_DBFILENOTFOUND'] = "The database upgrade file '%1' could not be found in the include folder! Please check if all files were successfully uploaded.";
$content['LN_DBUPGRADE_DBDEFFILESHORT'] = "The database upgrade files where empty or did not contain any SQL Command! Please check if all files were successfully uploaded.";
$content['LN_DBUPGRADE_WELCOME'] = "Welcome to the database upgrade";
$content['LN_DBUPGRADE_BEFORESTART'] = "Before you start upgrading your database, you should create a <b>FULL BACKUP OF YOUR DATABASE</b>. Anything else will be done automatically by the upgrade Script.";
$content['LN_DBUPGRADE_CURRENTINSTALLED'] = "Current Installed Database Version";
$content['LN_DBUPGRADE_TOBEINSTALLED'] = "Do be Installed Database Version";
$content['LN_DBUPGRADE_HASBEENDONE'] = "Database Update has been performed, see the results below";
$content['LN_DBUPGRADE_SUCCESSEXEC'] = "Successfully executed statements";
$content['LN_DBUPGRADE_FAILEDEXEC'] = "Failed statements";
$content['LN_DBUPGRADE_ONESTATEMENTFAILED'] = "At least one statement failed, you may need to correct and fix this issue manually. See error details below";
$content['LN_DBUPGRADE_ERRMSG'] = "Error Message";
$content['LN_DBUPGRADE_ULTRASTATSDBVERSION'] = "phpLogCon Database Version";

// Charts Options
$content['LN_CHARTS_CENTER'] = "Charts Options";
$content['LN_CHARTS_EDIT'] = "Edit Chart";
$content['LN_CHARTS_DELETE'] = "Delete Chart";
$content['LN_CHARTS_ADD'] = "Add new Chart";
$content['LN_CHARTS_ADDEDIT'] = "Add / Edit a Chart";
$content['LN_CHARTS_NAME'] = "Chart Name";
$content['LN_CHARTS_ENABLED'] = "Chart enabled";
$content['LN_CHARTS_ERROR_INVALIDORNOTFOUNDID'] = "The Chart-ID is invalid or could not be found.";
$content['LN_CHARTS_ERROR_IDNOTFOUND'] = "The Chart-ID could not be found in the database.";
$content['LN_CHARTS_WARNDELETESEARCH'] = "Are you sure that you want to delete the Chart '%1'? This cannot be undone!";
$content['LN_CHARTS_ERROR_DELCHART'] = "Deleting of the Chart with id '%1' failed!";
$content['LN_CHARTS_ERROR_HASBEENDEL'] = "The Chart '%1' has been successfully deleted!";

// Fields Options
$content['LN_FIELDS_CENTER'] = "Fields Options";
$content['LN_FIELDS_EDIT'] = "Edit Field";
$content['LN_FIELDS_DELETE'] = "Delete Field";
$content['LN_FIELDS_ADD'] = "Add new Field";
$content['LN_FIELDS_ID'] = "FieldID";
$content['LN_FIELDS_NAME'] = "Display Name";
$content['LN_FIELDS_DEFINE'] = "Internal FieldID";
$content['LN_FIELDS_DELETE_FROMDB'] = "Delete Field from DB";
$content['LN_FIELDS_ADDEDIT'] = "Add / Edit a Field";
$content['LN_FIELDS_TYPE'] = "Field Type";
$content['LN_FIELDS_ALIGN'] = "Listview Alignment";
$content['LN_FIELDS_SEARCHONLINE'] = "Enable online search";
$content['LN_FIELDS_DEFAULTWIDTH'] = "Row width in Listview";
$content['LN_FIELDS_ERROR_IDNOTFOUND'] = "The Field-ID could not be found in the database, or in the default constants.";
$content['LN_FIELDS_ERROR_INVALIDID'] = "The Field with ID '%1' is not a valid Field.";
$content['LN_FIELDS_SEARCHFIELD'] = "Name of Searchfilter";
$content['LN_FIELDS_WARNDELETESEARCH'] = "Are you sure that you want to delete the Field '%1'? This cannot be undone!";
$content['LN_FIELDS_ERROR_DELSEARCH'] = "The Field-ID could not be found in the database.";
$content['LN_FIELDS_ERROR_HASBEENDEL'] = "The Field '%1' has been successfully deleted!";
$content['LN_FIELDS_ERROR_FIELDCAPTIONEMPTY'] = "The field caption was empty. ";
$content['LN_FIELDS_ERROR_FIELDIDEMPTY'] = "The field id was empty. ";
$content['LN_FIELDS_ERROR_SEARCHFIELDEMPTY'] = "The searchfilter was empty. ";
$content['LN_FIELDS_ERROR_FIELDDEFINEEMPTY'] = "The internal FieldID was empty. ";
$content['LN_FIELDS_HASBEENEDIT'] = "The configuration for the field '%1' has been successfully edited.";
$content['LN_FIELDS_HASBEENADDED'] = "The configuration for the field '%1' has been successfully added.";
$content['LN_FIELDS_'] = "";
$content['LN_ALIGN_CENTER'] = "center";
$content['LN_ALIGN_LEFT'] = "left";
$content['LN_ALIGN_RIGHT'] = "right";
$content['LN_FILTER_TYPE_STRING'] = "String";
$content['LN_FILTER_TYPE_NUMBER'] = "Number";
$content['LN_FILTER_TYPE_DATE'] = "Date";

// Parser Options
$content['LN_PARSERS_EDIT'] = "Edit Message Parser";
$content['LN_PARSERS_DELETE'] = "Delete Message Parser";
$content['LN_PARSERS_ID'] = "Message Parser ID";
$content['LN_PARSERS_NAME'] = "Message Parser Name";
$content['LN_PARSERS_DESCRIPTION'] = "Message Parser Description";
$content['LN_PARSERS_ERROR_NOPARSERS'] = "There were no valid message parsers found in your installation. ";
$content['LN_PARSERS_HELP'] = "Help";
$content['LN_PARSERS_HELP_CLICK'] = "Click here for more help";
$content['LN_PARSERS_INFO'] = "Show more Information for this message parser.";
$content['LN_PARSERS_INIT'] = "Initialize settings for this message parser.";
$content['LN_PARSERS_REMOVE'] = "Remove settings for this message parser.";
$content['LN_PARSERS_ERROR_IDNOTFOUND'] = "There was no message parser with ID '%1' found.";
$content['LN_PARSERS_ERROR_INVALIDID'] = "Invalid message parser id.";
$content['LN_PARSERS_DETAILS'] = "Details for this Parser";
$content['LN_PARSERS_CUSTOMFIELDS'] = "The following Custom fields are needed by this Message Parser.";
$content['LN_PARSERS_WARNREMOVE'] = "You are about to remove the custom fields needed by the '%1' Message Parser. However you can add these fields again if you change your mind.";
$content['LN_PARSERS_ERROR_HASBEENREMOVED'] = "All settings ('%2' custom fields) for the Message Parser '%1' have been removed. ";
$content['LN_PARSERS_ERROR_HASBEENADDED'] = "All required settings ('%2' custom fields) for the Message Parser '%1' have been added. ";
$content['LN_PARSERS_ERROR_NOFIELDS'] = "The Message Parser '%1' does not have any custom fields to add.";
$content['LN_PARSERS_'] = "";

?>