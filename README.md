# jxSmartyPlugins - OXID Module for Extending Smarty


## Installation and Setup
1. Copy all folders and files under **copy\_this** to the root folder of your shop.


## How to Use

### [{ jxalertbox msg="..." type="..." timeout="..." }]

**Parameters**  
_msg_ - Message text which will be displayed in the box  
_type_ - Display type (color). Possible values are _success_, _info_, _warning_ and _danger_  
_timeout_ - Hides the alert box automatically after _timeout_ milliseconds

**Example**  
```smarty
[{jxalertbox msg="<b>Success</b><br />This is a success message" type="success"}]
[{jxalertbox msg="<b>Info</b><br />Place your info text here" type="info"}]
[{jxalertbox msg="<b>Warning</b><br />That's a warning message" type="warning"}]
[{jxalertbox msg="<b>Danger</b><br />Use this alertbox for dangerous steps" type="danger"]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxalertbox.png)

### [{ jxmodaldialog button="..." title="..." body="..." close="true" footerbutton="..." delay="..." timeout="..." }]

**Parameters**  
_button_ - The text of the action button  
_title_ - Title text of the modal box (optional)  
_body_ - Message text which will be displayed in the modal box  
_close_ - If set to true a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section  
_delay_ - Shows the modal automatically after _delay_ milliseconds. Do not combine with _button_  
_timeout_ - Hides the modal automatically after _timeout_ milliseconds

**Example**  
```smarty
[{ jxmodaldialog button="Info..." title="Info..." body="<b>Infotext</b><br />This is an important information." close="true" footerbutton="Close" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxmodaldialog.png)

### [{ jxmodalcontent button="..." ident="..." close="true" footerbutton="..." delay="..." timeout="..." }]

**Parameters**  
_button_ - The text of the action button  
_body_ - Message text which will be displayed in the modal box  
_close_ - If set to true a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section  
_delay_ - Shows the modal automatically after _delay_ milliseconds. Do not combine with _button_  
_timeout_ - Hides the modal automatically after _timeout_ milliseconds

**Example**  
```smarty
[{ jxmodalcontent button="More..." ident="oxrightofwithdrawal" close="false" footerbutton="Close" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxmodalcontent.png)

### [{ jxmodalpdf button="..." title="..." file="..." close="true" footerbutton="..." }]

**Parameters**  
_button_ - The text of the action button  
_title_ - Title text of the modal box (optional)  
_file_ - The name of the pdf file which will be displayed in the modal box  
_close_ - If set to true a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section 

**Example**  
```smarty
[{ jxmodalpdf button="Show PDF" file="/out/info.pdf" close="false" footerbutton="Close" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxmodalpdf.png)
