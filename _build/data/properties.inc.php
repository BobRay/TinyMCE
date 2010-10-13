<?php
/**
 * A default list of properties for the TinyMCE plugin
 *
 * @package tinymce
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'accessibility_warnings',
        'desc' => 'If this option is set to true some accessibility warnings will be presented to the user if they miss specifying that information. This option is set to true by default, since we should all try to make this world a better place for disabled people. But if you are annoyed with the warnings, set this option to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'apply_source_formatting',
        'desc' => 'This option enables you to tell TinyMCE to apply some source formatting to the output HTML code. With source formatting, the output HTML code is indented and formatted. Without source formatting, the output HTML is more compact. ',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'button_tile_map',
        'desc' => 'If this option is set to true TinyMCE will use tiled images instead of individual images for most of the editor controls. This produces faster loading time since only one GIF image needs to be loaded instead of a GIF for each individual button. This option is set to false by default since it doesn\'t work with some DOCTYPE declarations. ',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'cleanup',
        'desc' => 'This option enables or disables the built-in clean up functionality. TinyMCE is equipped with powerful clean up functionality that enables you to specify what elements and attributes are allowed and how HTML contents should be generated. This option is set to true by default, but if you want to disable it you may set it to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'cleanup_on_startup',
        'desc' => 'If you set this option to true, TinyMCE will perform a HTML cleanup call when the editor loads. This option is set to false by default.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'convert_fonts_to_spans',
        'desc' => 'If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated. How sizes get converted can be controlled by the font_size_classes and font_size_style_values options.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'convert_newlines_to_brs',
        'desc' => 'If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'convert_urls',
        'desc' => 'This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact. This option is set to true by default, which means URLs will be forced to be either absolute or relative depending on the state of relative_urls.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'dialog_type',
        'desc' => 'This option enables you to specify how dialogs/popups should be opened. Possible values are "window" and "modal", where the window option opens a normal window and the dialog option opens a modal dialog. This option is set to "window" by default.',
        'type' => 'list',
        'options' => array(
            array('name' => 'Window','window'),
            array('name' => 'Modal','modal'),
        ),
        'value' => 'window',
    ),
    array(
        'name' => 'directionality',
        'desc' => 'This option specifies the default writing direction. Some languages (Like Hebrew, Arabic, Urdu...) write from right to left instead of left to right. The default value of this option is "ltr" but if you want to use from right to left mode specify "rtl" instead.',
        'type' => 'list',
        'options' => array(
            array('name' => 'Left to Right','value' => 'ltr'),
            array('name' => 'Right to Left','value' => 'rtl'),
        ),
        'value' => 'ltr',
    ),
    array(
        'name' => 'element_format',
        'desc' => 'This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example <br /> will be <br> if you set this option to "html".',
        'type' => 'list',
        'options' => array(
            array('name' => 'XHTML','value' => 'xhtml'),
            array('name' => 'HTML','value' => 'html'),
        ),
        'value' => 'xhtml',
    ),
    array(
        'name' => 'entity_encoding',
        'desc' => 'This option controls how entities/characters get processed by TinyMCE.',
        'type' => 'list',
        'options' => array(
            array('name' => 'None','value' => ''),
            array('name' => 'Named','value' => 'named'),
            array('name' => 'Numeric','value' => 'numeric'),
            array('name' => 'Raw','value' => 'raw'),
        ),
        'value' => '',
    ),
    array(
        'name' => 'force_p_newlines',
        'desc' => 'This option enables you to disable/enable the creation of paragraphs on return/enter in Mozilla/Firefox. The default value of this option is true. ',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'force_hex_style_colors',
        'desc' => 'This option enables you to control TinyMCE to force the color format to use hexadecimal instead of rgb strings. It converts for example "color: rgb(255, 255, 0)" to "#FFFF00". This option is set to true by default since otherwice MSIE and Firefox would differ in this behavior.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'height',
        'desc' => 'Sets the height of the TinyMCE editor.',
        'type' => 'textfield',
        'options' => '',
        'value' => '400px',
    ),
    array(
        'name' => 'indentation',
        'desc' => 'This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.',
        'type' => 'textfield',
        'options' => '',
        'value' => '30px',
    ),
    array(
        'name' => 'invalid_elements',
        'desc' => 'This option should contain a comma separated list of element names to exclude from the content. Elements in this list will removed when TinyMCE executes a cleanup.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'language',
        'desc' => 'Sets the language for TinyMCE.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'en',
    ),
    array(
        'name' => 'nowrap',
        'desc' => 'This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'object_resizing',
        'desc' => 'This true/false option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'path_options',
        'desc' => 'Sets a group of options. Note: This will override the relative_urls, document_base_url and remove_script_host settings.',
        'type' => 'textfield',
        'options' => array(
            array('name' => 'Document Relative','value' => 'docrelative'),
            array('name' => 'Root Relative','value' => 'rootrelative'),
            array('name' => 'Full Path URL','value' => 'fullpathurl'),
        ),
        'value' => 'docrelative',
    ),
    array(
        'name' => 'plugin_insertdate_dateFormat',
        'desc' => 'Formatting of dates when using the InsertDate plugin.',
        'type' => 'textfield',
        'options' => '',
        'value' => '%Y-%m-%d',
    ),
    array(
        'name' => 'plugin_insertdate_timeFormat',
        'desc' => 'Formatting of times when using the InsertDate plugin.',
        'type' => 'textfield',
        'options' => '',
        'value' => '%H:%M:%S',
    ),
    array(
        'name' => 'preformatted',
        'desc' => 'If you enable this feature, whitespace such as tabs and spaces will be preserved. Much like the behavior of a <pre> element. This can be handy when integrating TinyMCE with webmail clients. This option is disabled by default.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'relative_urls',
        'desc' => 'If this option is set to true, all URLs returned from the file manager will be relative from the specified document_base_url. If it is set to false all URLs will be converted to absolute URLs. This option is set to true by default.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'remove_linebreaks',
        'desc' => 'This option controls whether line break characters should be removed from output HTML. This option is enabled by default because there are differences between browser implementations regarding what to do with white space in the DOM. Gecko and Safari place white space in text nodes in the DOM. IE and Opera remove them from the DOM and therefore the line breaks will automatically be removed in those. This option will normalize this behavior when enabled (true) and all browsers will have a white-space-stripped DOM serialization.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'remove_script_host',
        'desc' => 'If this option is enabled the protocol and host part of the URLs returned from the file manager will be removed. This option is only used if the relative_urls option is set to false. This option is set to true by default.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'remove_trailing_nbsp',
        'desc' => 'This option enables you to specify that TinyMCE should remove any traling &nbsp; characters in block elements if you start to write inside them. Paragraphs are default padded with a &nbsp; and if you write text into such paragraphs the space will remain. Setting this option to true will remove the space. This option is set to false by default since the cursor jumps a bit in Gecko browsers.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'skin',
        'desc' => 'This option enables you to specify what skin you want to use with your theme. A skin is basically a CSS file that gets loaded from the skins directory inside the theme. The advanced theme that TinyMCE comes with has two skins these are called "default" and "o2k7".',
        'type' => 'textfield',
        'options' => '',
        'value' => 'cirkuit',
    ),
    array(
        'name' => 'skin_variant',
        'desc' => 'This option enables you to specify a variant for the skin, for example "silver" or "black". "default" skin does not offer any variant, whereas "o2k7" default offers "silver" or "black" variants to the default one. When creating a skin, additional variants may also be created, by adding ui_[variant_name].css files alongside the default ui.css.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'table_inline_editing',
        'desc' => '',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'theme_advanced_blockformats',
        'desc' => 'This option should contain a comma separated list of formats that will be available in the format drop down list. This option is only available if the advanced theme is used.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address',
    ),
    array(
        'name' => 'theme_advanced_disable',
        'desc' => 'This option should contain a comma separated list of controls to disable from any toolbar row/panel in TinyMCE.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'theme_advanced_path',
        'desc' => 'This option gives you the ability to enable/disable the element path. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to "true" by default. Setting this option to "false" will effectively hide the path tool, though it still takes up room in the Status Bar.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'theme_advanced_resize_horizontal',
        'desc' => 'This option gives you the ability to enable/disable the horizontal resizing. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom" and when the theme_advanced_resizing is set to true. This option is set to true by default, allowing both resizing horizontal and vertical.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'theme_advanced_resizing',
        'desc' => 'This option gives you the ability to enable/disable the resizing button. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to false by default.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'theme_advanced_statusbar_location',
        'desc' => 'This option enables you to specify where the element statusbar with the path and resize tool should be located. This option can be set to "top" or "bottom". The default value is set to "top". This option can only be used when the theme is set to "advanced".',
        'type' => 'list',
        'options' => array(
            array('name' => 'Top','value' => 'top'),
            array('name' => 'Bottom','value' => 'bottom'),
        ),
        'value' => 'bottom',
    ),
    array(
        'name' => 'theme_advanced_toolbar_align',
        'desc' => 'This option enables you to specify the alignment of the toolbar, this value can be "left", "right" or "center" (the default). This option can only be used when theme is set to "advanced".',
        'type' => 'textfield',
        'options' => array(
            array('name' => 'Center','value' => 'center'),
            array('name' => 'Left','value' => 'left'),
            array('name' => 'Right','value' => 'right'),
        ),
        'value' => 'left',
    ),
    array(
        'name' => 'theme_advanced_toolbar_location',
        'desc' => '
This option enables you to specify where the toolbar should be located. This option can be set to "top" or "bottom" (the defualt). This option can only be used when theme is set to advanced.',
        'type' => 'list',
        'options' => array(
            array('name' => 'Top','value' => 'top'),
            array('name' => 'Bottom','value' => 'bottom'),
        ),
        'value' => 'top',
    ),
    array(
        'name' => 'width',
        'desc' => 'The width of the TinyMCE editor.',
        'type' => 'textfield',
        'options' => '',
        'value' => '95%',
    ),
);

return $properties;
