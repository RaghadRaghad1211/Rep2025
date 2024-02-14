<?php
$tdatainfo_patinat = array();
$tdatainfo_patinat[".searchableFields"] = array();
$tdatainfo_patinat[".ShortName"] = "info_patinat";
$tdatainfo_patinat[".OwnerID"] = "";
$tdatainfo_patinat[".OriginalTable"] = "info_patinat";


$tdatainfo_patinat[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainfo_patinat[".originalPagesByType"] = $tdatainfo_patinat[".pagesByType"];
$tdatainfo_patinat[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainfo_patinat[".originalPages"] = $tdatainfo_patinat[".pages"];
$tdatainfo_patinat[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainfo_patinat[".originalDefaultPages"] = $tdatainfo_patinat[".defaultPages"];

//	field labels
$fieldLabelsinfo_patinat = array();
$fieldToolTipsinfo_patinat = array();
$pageTitlesinfo_patinat = array();
$placeHoldersinfo_patinat = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinfo_patinat["Arabic"] = array();
	$fieldToolTipsinfo_patinat["Arabic"] = array();
	$placeHoldersinfo_patinat["Arabic"] = array();
	$pageTitlesinfo_patinat["Arabic"] = array();
	$fieldLabelsinfo_patinat["Arabic"]["id"] = "Id";
	$fieldToolTipsinfo_patinat["Arabic"]["id"] = "";
	$placeHoldersinfo_patinat["Arabic"]["id"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["office_name"] = "أسم دائرة اللجان";
	$fieldToolTipsinfo_patinat["Arabic"]["office_name"] = "";
	$placeHoldersinfo_patinat["Arabic"]["office_name"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["full_name"] = "الأسم الرباعي واللقب";
	$fieldToolTipsinfo_patinat["Arabic"]["full_name"] = "";
	$placeHoldersinfo_patinat["Arabic"]["full_name"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["mother_name"] = "أسم الأم";
	$fieldToolTipsinfo_patinat["Arabic"]["mother_name"] = "";
	$placeHoldersinfo_patinat["Arabic"]["mother_name"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["id_number"] = "رقم الهوية التعريفية ونوعها";
	$fieldToolTipsinfo_patinat["Arabic"]["id_number"] = "";
	$placeHoldersinfo_patinat["Arabic"]["id_number"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["sex"] = "الجنس";
	$fieldToolTipsinfo_patinat["Arabic"]["sex"] = "";
	$placeHoldersinfo_patinat["Arabic"]["sex"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["birth"] = "المواليد";
	$fieldToolTipsinfo_patinat["Arabic"]["birth"] = "";
	$placeHoldersinfo_patinat["Arabic"]["birth"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["mobile_number"] = "رقم الموبايل";
	$fieldToolTipsinfo_patinat["Arabic"]["mobile_number"] = "";
	$placeHoldersinfo_patinat["Arabic"]["mobile_number"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["address"] = "عنوان السكن";
	$fieldToolTipsinfo_patinat["Arabic"]["address"] = "";
	$placeHoldersinfo_patinat["Arabic"]["address"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["office_patinat_name"] = "أسم دائرة الموظف";
	$fieldToolTipsinfo_patinat["Arabic"]["office_patinat_name"] = "";
	$placeHoldersinfo_patinat["Arabic"]["office_patinat_name"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["book_no"] = "رقم كتاب الأرسال";
	$fieldToolTipsinfo_patinat["Arabic"]["book_no"] = "";
	$placeHoldersinfo_patinat["Arabic"]["book_no"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["book_date"] = "تاريخ كتاب الأرسال";
	$fieldToolTipsinfo_patinat["Arabic"]["book_date"] = "";
	$placeHoldersinfo_patinat["Arabic"]["book_date"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["book_pic"] = "صورة من الكتاب";
	$fieldToolTipsinfo_patinat["Arabic"]["book_pic"] = "";
	$placeHoldersinfo_patinat["Arabic"]["book_pic"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["book_attach"] = "صورة من المرفقات";
	$fieldToolTipsinfo_patinat["Arabic"]["book_attach"] = "";
	$placeHoldersinfo_patinat["Arabic"]["book_attach"] = "";
	$fieldLabelsinfo_patinat["Arabic"]["qr_code_info"] = "الرمز التعريفي للأستمارة";
	$fieldToolTipsinfo_patinat["Arabic"]["qr_code_info"] = "";
	$placeHoldersinfo_patinat["Arabic"]["qr_code_info"] = "";
	$pageTitlesinfo_patinat["Arabic"]["add"] = "أستمارة حجز موعد ألكتروني مع اللجان الطبية";
	$pageTitlesinfo_patinat["Arabic"]["edit"] = "أستمارة حجز موعد ألكتروني مع اللجان الطبية";
	$pageTitlesinfo_patinat["Arabic"]["view"] = "أستمارة حجز موعد ألكتروني مع اللجان الطبية";
	if (count($fieldToolTipsinfo_patinat["Arabic"]))
		$tdatainfo_patinat[".isUseToolTips"] = true;
}


	$tdatainfo_patinat[".NCSearch"] = true;



$tdatainfo_patinat[".shortTableName"] = "info_patinat";
$tdatainfo_patinat[".nSecOptions"] = 0;

$tdatainfo_patinat[".mainTableOwnerID"] = "";
$tdatainfo_patinat[".entityType"] = 0;
$tdatainfo_patinat[".connId"] = "emcms_at_localhost";


$tdatainfo_patinat[".strOriginalTableName"] = "info_patinat";

	



$tdatainfo_patinat[".showAddInPopup"] = false;

$tdatainfo_patinat[".showEditInPopup"] = false;

$tdatainfo_patinat[".showViewInPopup"] = false;

$tdatainfo_patinat[".listAjax"] = false;
//	temporary
//$tdatainfo_patinat[".listAjax"] = false;

	$tdatainfo_patinat[".audit"] = false;

	$tdatainfo_patinat[".locking"] = false;


$pages = $tdatainfo_patinat[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainfo_patinat[".edit"] = true;
	$tdatainfo_patinat[".afterEditAction"] = 2;
	$tdatainfo_patinat[".closePopupAfterEdit"] = 1;
	$tdatainfo_patinat[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatainfo_patinat[".add"] = true;
$tdatainfo_patinat[".afterAddAction"] = 2;
$tdatainfo_patinat[".closePopupAfterAdd"] = 1;
$tdatainfo_patinat[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatainfo_patinat[".list"] = true;
}



$tdatainfo_patinat[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainfo_patinat[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainfo_patinat[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainfo_patinat[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainfo_patinat[".printFriendly"] = true;
}



$tdatainfo_patinat[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainfo_patinat[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainfo_patinat[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainfo_patinat[".isUseAjaxSuggest"] = true;





$tdatainfo_patinat[".ajaxCodeSnippetAdded"] = false;

$tdatainfo_patinat[".buttonsAdded"] = false;

$tdatainfo_patinat[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainfo_patinat[".isUseTimeForSearch"] = false;


$tdatainfo_patinat[".badgeColor"] = "D2691E";


$tdatainfo_patinat[".allSearchFields"] = array();
$tdatainfo_patinat[".filterFields"] = array();
$tdatainfo_patinat[".requiredSearchFields"] = array();

$tdatainfo_patinat[".googleLikeFields"] = array();
$tdatainfo_patinat[".googleLikeFields"][] = "id";
$tdatainfo_patinat[".googleLikeFields"][] = "office_name";
$tdatainfo_patinat[".googleLikeFields"][] = "full_name";
$tdatainfo_patinat[".googleLikeFields"][] = "mother_name";
$tdatainfo_patinat[".googleLikeFields"][] = "id_number";
$tdatainfo_patinat[".googleLikeFields"][] = "sex";
$tdatainfo_patinat[".googleLikeFields"][] = "birth";
$tdatainfo_patinat[".googleLikeFields"][] = "mobile_number";
$tdatainfo_patinat[".googleLikeFields"][] = "address";
$tdatainfo_patinat[".googleLikeFields"][] = "office_patinat_name";
$tdatainfo_patinat[".googleLikeFields"][] = "book_no";
$tdatainfo_patinat[".googleLikeFields"][] = "book_date";
$tdatainfo_patinat[".googleLikeFields"][] = "book_pic";
$tdatainfo_patinat[".googleLikeFields"][] = "book_attach";
$tdatainfo_patinat[".googleLikeFields"][] = "qr_code_info";



$tdatainfo_patinat[".tableType"] = "list";

$tdatainfo_patinat[".printerPageOrientation"] = 0;
$tdatainfo_patinat[".nPrinterPageScale"] = 100;

$tdatainfo_patinat[".nPrinterSplitRecords"] = 40;

$tdatainfo_patinat[".geocodingEnabled"] = false;










$tdatainfo_patinat[".pageSize"] = 20;

$tdatainfo_patinat[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainfo_patinat[".strOrderBy"] = $tstrOrderBy;

$tdatainfo_patinat[".orderindexes"] = array();


$tdatainfo_patinat[".sqlHead"] = "SELECT id,  office_name,  full_name,  mother_name,  id_number,  sex,  birth,  mobile_number,  address,  office_patinat_name,  book_no,  book_date,  book_pic,  book_attach,  qr_code_info";
$tdatainfo_patinat[".sqlFrom"] = "FROM info_patinat";
$tdatainfo_patinat[".sqlWhereExpr"] = "";
$tdatainfo_patinat[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainfo_patinat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainfo_patinat[".arrGroupsPerPage"] = $arrGPP;

$tdatainfo_patinat[".highlightSearchResults"] = true;

$tableKeysinfo_patinat = array();
$tableKeysinfo_patinat[] = "id";
$tdatainfo_patinat[".Keys"] = $tableKeysinfo_patinat;


$tdatainfo_patinat[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["id"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "id";
//	office_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "office_name";
	$fdata["GoodName"] = "office_name";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","office_name");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "office_name";

		$fdata["sourceSingle"] = "office_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "office_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["office_name"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "office_name";
//	full_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "full_name";
	$fdata["GoodName"] = "full_name";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","full_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "full_name";

		$fdata["sourceSingle"] = "full_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "full_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["full_name"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "full_name";
//	mother_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mother_name";
	$fdata["GoodName"] = "mother_name";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","mother_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mother_name";

		$fdata["sourceSingle"] = "mother_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mother_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["mother_name"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "mother_name";
//	id_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_number";
	$fdata["GoodName"] = "id_number";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","id_number");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_number";

		$fdata["sourceSingle"] = "id_number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_number";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["id_number"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "id_number";
//	sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sex";
	$fdata["GoodName"] = "sex";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sex";

		$fdata["sourceSingle"] = "sex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["sex"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "sex";
//	birth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "birth";
	$fdata["GoodName"] = "birth";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","birth");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "birth";

		$fdata["sourceSingle"] = "birth";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birth";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["birth"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "birth";
//	mobile_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mobile_number";
	$fdata["GoodName"] = "mobile_number";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","mobile_number");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "mobile_number";

		$fdata["sourceSingle"] = "mobile_number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile_number";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["mobile_number"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "mobile_number";
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address";

		$fdata["sourceSingle"] = "address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["address"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "address";
//	office_patinat_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "office_patinat_name";
	$fdata["GoodName"] = "office_patinat_name";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","office_patinat_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "office_patinat_name";

		$fdata["sourceSingle"] = "office_patinat_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "office_patinat_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["office_patinat_name"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "office_patinat_name";
//	book_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "book_no";
	$fdata["GoodName"] = "book_no";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","book_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "book_no";

		$fdata["sourceSingle"] = "book_no";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "book_no";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["book_no"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "book_no";
//	book_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "book_date";
	$fdata["GoodName"] = "book_date";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","book_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "book_date";

		$fdata["sourceSingle"] = "book_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "book_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["book_date"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "book_date";
//	book_pic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "book_pic";
	$fdata["GoodName"] = "book_pic";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","book_pic");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "book_pic";

		$fdata["sourceSingle"] = "book_pic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "book_pic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["book_pic"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "book_pic";
//	book_attach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "book_attach";
	$fdata["GoodName"] = "book_attach";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","book_attach");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "book_attach";

		$fdata["sourceSingle"] = "book_attach";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "book_attach";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["book_attach"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "book_attach";
//	qr_code_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "qr_code_info";
	$fdata["GoodName"] = "qr_code_info";
	$fdata["ownerTable"] = "info_patinat";
	$fdata["Label"] = GetFieldLabel("info_patinat","qr_code_info");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qr_code_info";

		$fdata["sourceSingle"] = "qr_code_info";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qr_code_info";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainfo_patinat["qr_code_info"] = $fdata;
		$tdatainfo_patinat[".searchableFields"][] = "qr_code_info";


$tables_data["info_patinat"]=&$tdatainfo_patinat;
$field_labels["info_patinat"] = &$fieldLabelsinfo_patinat;
$fieldToolTips["info_patinat"] = &$fieldToolTipsinfo_patinat;
$placeHolders["info_patinat"] = &$placeHoldersinfo_patinat;
$page_titles["info_patinat"] = &$pageTitlesinfo_patinat;


changeTextControlsToDate( "info_patinat" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["info_patinat"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["info_patinat"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_info_patinat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  office_name,  full_name,  mother_name,  id_number,  sex,  birth,  mobile_number,  address,  office_patinat_name,  book_no,  book_date,  book_pic,  book_attach,  qr_code_info";
$proto0["m_strFrom"] = "FROM info_patinat";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "info_patinat";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "office_name",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto8["m_sql"] = "office_name";
$proto8["m_srcTableName"] = "info_patinat";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "full_name",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto10["m_sql"] = "full_name";
$proto10["m_srcTableName"] = "info_patinat";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mother_name",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto12["m_sql"] = "mother_name";
$proto12["m_srcTableName"] = "info_patinat";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_number",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto14["m_sql"] = "id_number";
$proto14["m_srcTableName"] = "info_patinat";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sex",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto16["m_sql"] = "sex";
$proto16["m_srcTableName"] = "info_patinat";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "birth",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto18["m_sql"] = "birth";
$proto18["m_srcTableName"] = "info_patinat";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile_number",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto20["m_sql"] = "mobile_number";
$proto20["m_srcTableName"] = "info_patinat";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto22["m_sql"] = "address";
$proto22["m_srcTableName"] = "info_patinat";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "office_patinat_name",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto24["m_sql"] = "office_patinat_name";
$proto24["m_srcTableName"] = "info_patinat";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "book_no",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto26["m_sql"] = "book_no";
$proto26["m_srcTableName"] = "info_patinat";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "book_date",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto28["m_sql"] = "book_date";
$proto28["m_srcTableName"] = "info_patinat";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "book_pic",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto30["m_sql"] = "book_pic";
$proto30["m_srcTableName"] = "info_patinat";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "book_attach",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto32["m_sql"] = "book_attach";
$proto32["m_srcTableName"] = "info_patinat";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "qr_code_info",
	"m_strTable" => "info_patinat",
	"m_srcTableName" => "info_patinat"
));

$proto34["m_sql"] = "qr_code_info";
$proto34["m_srcTableName"] = "info_patinat";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "info_patinat";
$proto37["m_srcTableName"] = "info_patinat";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "office_name";
$proto37["m_columns"][] = "full_name";
$proto37["m_columns"][] = "mother_name";
$proto37["m_columns"][] = "id_number";
$proto37["m_columns"][] = "sex";
$proto37["m_columns"][] = "birth";
$proto37["m_columns"][] = "mobile_number";
$proto37["m_columns"][] = "address";
$proto37["m_columns"][] = "office_patinat_name";
$proto37["m_columns"][] = "book_no";
$proto37["m_columns"][] = "book_date";
$proto37["m_columns"][] = "book_pic";
$proto37["m_columns"][] = "book_attach";
$proto37["m_columns"][] = "committtee_name";
$proto37["m_columns"][] = "committtee_date";
$proto37["m_columns"][] = "qr_code_info";
$proto37["m_columns"][] = "note";
$proto37["m_columns"][] = "input_date";
$proto37["m_columns"][] = "decision_no";
$proto37["m_columns"][] = "decision_date";
$proto37["m_columns"][] = "decision_text";
$proto37["m_columns"][] = "decision_pic";
$proto37["m_columns"][] = "decision_attach";
$proto37["m_columns"][] = "decision_note";
$proto37["m_columns"][] = "info_data_update";
$proto37["m_columns"][] = "qr_code_decision";
$proto37["m_columns"][] = "id_search";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "info_patinat";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "info_patinat";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="info_patinat";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_info_patinat = createSqlQuery_info_patinat();


	
		;

															

$tdatainfo_patinat[".sqlquery"] = $queryData_info_patinat;



include_once(getabspath("include/info_patinat_events.php"));
$tdatainfo_patinat[".hasEvents"] = true;

?>