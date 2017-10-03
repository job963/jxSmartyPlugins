# jxSmartyPlugins - OXID Module for Extending Smarty


## Installation and Setup
1. Copy all folders and files under **copy\_this** to the root folder of your shop.

## Features
The jxSmartyPlugins makes using Bootstrap elements and Awesome Font icons much more easier.

### Boostrap Elements
  * Alert boxes for success, info, warning and danger messages
  * Simple modal (popup) dialog
  * Modal dialog from CMS page
  * Modal dialog for PDF files

### Font Awesome
  * Symbol icons
  * Pulled icons
  * Animated icons
  * Stacked icons

### Conditional Comments
  * HTML comments
  * Conditions (eg. server) for displaying


## How to Use

### **Bootstrap Elements**

#### [{ jxalertbox msg="..." type="..." timeout="..." }]

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


#### [{ jxmodaldialog button="..." title="..." body="..." close="true" footerbutton="..." delay="..." timeout="..." }]

**Parameters**  
_button_ - The text of the action button  
_title_ - Title text of the modal box (optional)  
_body_ - Message text which will be displayed in the modal box  
_close_ - If set to _true_ a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section  
_delay_ - Shows the modal automatically after _delay_ milliseconds. Do not combine with _button_  
_timeout_ - Hides the modal automatically after _timeout_ milliseconds

**Example**  
```smarty
[{ jxmodaldialog button="Info..." title="Info..." body="<b>Infotext</b><br />This is an important information." close="true" footerbutton="Close" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxmodaldialog.png)


#### [{ jxmodalcontent button="..." ident="..." close="true" footerbutton="..." delay="..." timeout="..." }]

**Parameters**  
_button_ - The text of the action button  
_body_ - Message text which will be displayed in the modal box  
_close_ - If set to _true_ a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section  
_delay_ - Shows the modal automatically after _delay_ milliseconds. Do not combine with _button_  
_timeout_ - Hides the modal automatically after _timeout_ milliseconds

**Example**  
```smarty
[{ jxmodalcontent button="More..." ident="oxrightofwithdrawal" close="false" footerbutton="Close" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxmodalcontent.png)


#### [{ jxmodalpdf button="..." title="..." file="..." close="true" footerbutton="..." }]

**Parameters**  
_button_ - The text of the action button  
_title_ - Title text of the modal box (optional)  
_file_ - The name of the pdf file which will be displayed in the modal box  
_close_ - If set to _true_ a close "x" will displayed in the upper right corner  
_footerbutton_ - Label text of the close button in the footer section 

**Example**  
```smarty
[{ jxmodalpdf button="Show PDF" file="/out/info.pdf" close="false" footerbutton="Close" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxmodalpdf.png)


### Awesome Icon Font

#### [{ jxfa icon="..." color="..." size="..." width="..." rot="..." flip="..." }]

**Parameters**  
_icon_ - The name of the icon without the prefix _fa-_, eg. _vcard_ for icon _fa-vcard_   
_color_ - HTML color code, eg. green or #a0a0a0 (optional)  
_size_ - Size of the icon, can be _lg_, _2x_, _3x_ or _4x_ (optional)  
_width_ - Allows to set a fixed width by givin _fw_ (optional)  
_rot_ - Rotates the icon, can be _90_, _180_ or _270_ (optional)  
_flip_ - Flips the icon, can be _hor_ or _vert_ (optional)  

**Example**  
```smarty
[{ jxfa icon="camera-retro" size="lg" }]
[{ jxfa icon="camera-retro" size="2x" color="red" }]
[{ jxfa icon="paper-plane" rot="90" size="lg" }]
[{ jxfa icon="shield" flip="vert" size="lg" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxfa.png)


#### [{ jxfa spin=..." color="..." size="..." width="..." }]

**Parameters**  
_spin_ - The name of the icon without the prefix _fa-_, eg. _cog_ for icon _fa-cog_  
_color_ - HTML color code, eg. green or #a0a0a0 (optional)  
_size_ - Size of the icon, can be _lg_, _2x_, _3x_ or _4x_ (optional)  
_width_ - Allows to set a fixed width by givin _fw_ (optional)  

**Example**  
```smarty
[{ jxfa spin="cog" size="3x" color="gray" }]
[{ jxfa spin="pulse" size="3x" color="blue" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxfaspin.png)


####[{ jxfa pull="..." icon="..." color="..." align="..." border="..." }]

**Parameters**  
_pull_ - Switch the pull mode on, by giving _on_ as value  
_icon_ - The name of the icon without the prefix _fa-_, eg. _vcard_ for icon _fa-vcard_  
_color_ - HTML color code, eg. green or #a0a0a0 (optional)  
_align_ - Specifies the position of the icon, can be _left_ or _right_  
_border_ - Allows to add a border by setting _on_ as value (optional)  

**Example**  
```smarty
[{ jxfa icon="shopping-cart" pull="on" align="left" border="on" color="darkorange" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxfapull.png)


####[{ jxfastack inner="..." outer="..." innercolor="..." outercolor="..." inverse="..." order="..." rot="..." flip=..." }]

**Parameters**  
_inner_ - The name of the inner icon,  without the prefix _fa-_, eg. _flag_ for icon _fa-flag_  
_outer_ - The name of the inner icon,  without the prefix _fa-_, eg. _circle_ for icon _fa-circle_  
_innercolor_ - HTML color code, eg. yellow or #a0a0a0 (optional)  
_outercolor_ - HTML color code, eg. forestgreen or #a0a0a0 (optional)  
_inverse_ - Inverse black and white, can be _true_ (optional)  
_order_ - Changes the order (foreground/background) of inner and outer icon (optional)  
_rot_ - Rotates the inner icon, can be _90_, _180_ or _270_ (optional)  
_flip_ - Flips the inner icon, can be _hor_ or _vert_ (optional)  

**Example**  
```smarty
[{ jxfastack innericon="flag" outericon="circle" innercolor="yellow" outercolor="forestgreen" }]
[{ jxfastack innericon="unlock-alt" outericon="square" innercolor="blue" outercolor="darkorange" }]
[{ jxfastack innericon="unlock-alt" outericon="square" inverse="true" rot="90" }]
[{ jxfastack innericon="unlock-alt" outericon="square" inverse="true" spin="spinner" }]
```
![](https://github.com/job963/jxSmartyPlugins/raw/master/docu/jxfastack.png)


####[{ jxrem remark="..." display="none|regex|always" style="block" }]

**Parameters**  
_remark_ - The comment text. Use _\n_ to get a line break  
_display_ - Allows to display the comment _never_, _conditional_ or _always_ (optional)  
style_ - If set to _block_ the begin and the end of the comment are in new line   

**Example**  
```smarty
[{ jxrem remark="This is a HTML comment\nCreated by jxSmartyPlugin" }]
[{ jxrem remark="This is a block formatted HTML comment" }]
```
  
```html
<!-- This is a HTML comment
Created by jxSmartyPlugin -->

<!-- 
This is a block formatted HTML comment
-->
```
