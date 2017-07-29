# jxSmartyPlugins - OXID Module for Extending Smarty



## Installation and Setup
1. Copy all folders and files under **copy\_this** to the root folder of your shop.


## How to Use

### [{ jxalertbox msg="..." type="..." }]

**Parameters**  
_msg_ - Message text which will be displayed in the box  
_type_ - Display type (color). Possible values are _success_, _info_, _warning_ and _danger_

**Example**  
[{ jxalertbox msg="Do not try to do this" type="danger" }]

### [{ jxmodaldialog button="..." title="..." body="..." close="true" footerbutton="..." }]

**Parameters**  
_button_ - The text of the action button  
_title_ - Title text of the modal box (optional)  
_body_ - Message text which will be displayed in the modal box  
_close_ - If set to true a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section 

**Example**  
[{ jxmodaldialog button="More Info" title="Info about" body="This is the info text" close="true" footerbutton="Close" }]

### [{ jxmodalcontent button="..." title="..." ident="..." close="true" footerbutton="..." }]

**Parameters**  
_button_ - The text of the action button  
_title_ - Title text of the modal box (optional)  
_body_ - Message text which will be displayed in the modal box  
_close_ - If set to true a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section 

**Example**  
[{ jxmodalcontent button="More Info" title="Delivery Information" ident="oxdeliveryinfo" close="false" footerbutton="Close" }]
