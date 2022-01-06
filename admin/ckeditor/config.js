CKEDITOR.editorConfig = function( config ) {

	config.language = 'en';
	config.uiColor = '#F7B42C';
	config.height = 800;
config.toolbarCanCollapse = true;
	config.filebrowserBrowseUrl = '../ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
config.filebrowserImageBrowseUrl = '../ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
config.filebrowserFlashBrowseUrl = '../ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
config.filebrowserUploadUrl = '../ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';

config.filebrowserImageUploadUrl = '../ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';

config.filebrowserFlashUploadUrl = '../ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
	 
config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
		
	
	];

	config.removeButtons = 'About,ShowBlocks,PageBreak,Flash,Anchor,BidiRtl,BidiLtr,Outdent,Indent,CopyFormatting,RemoveFormat,TextField,Textarea,Select,Button,ImageButton,HiddenField,Find,Replace,PasteText,PasteFromWord,Print,Preview,NewPage,Save,Templates';

	
config.extraPlugins= 'lineutils,widget,codesnippet,prism';
		config.codeSnippet_theme= 'tomorrow-night-eighties';
	
	};