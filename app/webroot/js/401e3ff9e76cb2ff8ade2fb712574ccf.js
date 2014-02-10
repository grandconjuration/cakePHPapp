window.addEvent("domready", function (event) {tinyMCE.init({
mode : "specific_textareas",
editor_selector : "tinymce",
theme : "advanced",
language : "nl",
theme_advanced_buttons1 : "formatselect,fontsizeselect,bold,italic,underline,|,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,undo,redo,link,unlink",
theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace",
theme_advanced_buttons3 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : "1",
content_css : "/Inhalo.nl/Cakephp/theme/InHaloWard/css/style.css",
});
});