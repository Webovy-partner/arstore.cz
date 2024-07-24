function toggleDropdownShare() {
    $('.share-icon').toggleClass('open');
}

function copyURLToClipboard() {
    const el = document.createElement('textarea');
    el.value = window.location.href;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    $('#copy-url span').text('zkopirováno');
    setTimeout(() => {
        $('#copy-url span').html('Zkopírovat&nbsp;odkaz');
    }, 1000);
    return '';
}

var url = encodeURIComponent(window.location.href);
var text = encodeURIComponent(document.title);


function text(){
     $('.share-icon').toggleClass('open');
    return '';
}
	
if($('body').has('.template_product_detail')){
	$('.misc_box_header .bookmark').each(function() {
        var onclickAttr = $(this).attr('onclick');
        var param = onclickAttr.match(/showMisc\('([^']+)'\)/)[1];
        var targetDiv = $('#' + param + '_content');
        var headerText = $(this).text().trim();
        var newElement = '<p class="toggle-show">' + headerText + '<span></span></p>';
       
        targetDiv.prepend(newElement);
    });
    
    if($('#files_content').html().trim() == '<p class="toggle-show">soubory a odkazy<span></span></p>\n\n\t\t\t\x3Cscript type="text/javascript">\n\t\t\t\t$("#files_header").hide();\n\t\t\t\x3C/script>'){
    	$('#files_content').remove();
    }
    
	$(document).on('click', '.toggle-show', function() {
	    $(this).parent().toggleClass('visible');
	});
	
	const shareiconEl = '    <div class="share-icon">        <button onclick="toggleDropdownShare()"><svg style="fill: black" focusable="false" aria-hidden="true" viewBox="0 0 20 20"><path d="M0,0H20V20H0Z" fill="none"></path><path d="M9.99,1a.673.673,0,0,0-.461.192L6.862,3.807a.646.646,0,0,0-.183.637.659.659,0,0,0,.477.468.677.677,0,0,0,.649-.18l1.528-1.5v8.23a.654.654,0,0,0,.33.574.684.684,0,0,0,.673,0,.651.651,0,0,0,.33-.574V3.232l1.53,1.5a.675.675,0,0,0,.648.18.661.661,0,0,0,.477-.468.646.646,0,0,0-.183-.637L10.471,1.192A.671.671,0,0,0,9.99,1ZM6,6.23A1.992,1.992,0,0,0,4,8.192v7.846A1.991,1.991,0,0,0,6,18h8a1.991,1.991,0,0,0,2-1.962V8.192a1.991,1.991,0,0,0-2-1.961H12.667V7.539H14a.65.65,0,0,1,.667.653v7.846a.65.65,0,0,1-.667.654H6a.65.65,0,0,1-.667-.654V8.192A.65.65,0,0,1,6,7.539H7.333V6.23Z" fill-rule="evenodd"></path></svg></button>        <div class="share-icon__box">            <a href="" target="_blank" onclick="return test()" id="sh-facebook-icon"><svg style="fill: rgb(31, 122, 240);" focusable="false" aria-hidden="true" viewBox="0 0 28 28" width="20" height="20"><path d="M13,9.467h3.733L16.267,13.2H13V24.4H8.8V13.2H6V9.467H8.8V6.958c0-1.633.233-2.868,1.05-3.7A4.39,4.39,0,0,1,13.467,2h3.267V5.733H14.75a2.016,2.016,0,0,0-1.429.35A1.708,1.708,0,0,0,13,7.25Z" transform="translate(2.4 0.8)"></path></svg> facebook</a>            <a href="" target="_blank" onclick="return test()" id="sh-twitter-icon"><svg style="fill: rgb(29, 161, 242)" focusable="false" aria-hidden="true" viewBox="0 0 29 28" width="20" height="20"><path d="M28.55,5.516a10.662,10.662,0,0,1-2.8,2.734v.656a14.845,14.845,0,0,1-4.407,10.418Q16.935,24,9.639,24A16.358,16.358,0,0,1,1,21.594a13.145,13.145,0,0,0,1.342.109,11.452,11.452,0,0,0,7-2.3A5.931,5.931,0,0,1,6.078,18.34a5.034,5.034,0,0,1-1.985-2.6,7.479,7.479,0,0,0,1.051.109,6.972,6.972,0,0,0,1.518-.219A5.784,5.784,0,0,1,3.422,13.8a4.855,4.855,0,0,1-1.313-3.363v-.055a5.6,5.6,0,0,0,2.568.656,4.893,4.893,0,0,1-2.51-4.43,5.01,5.01,0,0,1,.759-2.625A15.663,15.663,0,0,0,14.542,9.508a4.49,4.49,0,0,1-.117-1.2,4.967,4.967,0,0,1,1.634-3.773A5.668,5.668,0,0,1,20.087,3a5.563,5.563,0,0,1,4.086,1.7,10.957,10.957,0,0,0,3.619-1.313,4.92,4.92,0,0,1-2.51,2.953A10.152,10.152,0,0,0,28.55,5.516Z" transform="translate(0.45 1.2)"></path></svg> Twitter</a>            <button id="copy-url" onclick="return copyURLToClipboard()"><svg style="fill: rgb(22, 83, 164);" focusable="false" aria-hidden="true" viewBox="0 0 20 20" width="20" height="20"><path d="M13.316,2H4.474A1.469,1.469,0,0,0,3,3.455V13.636H4.474V3.455h8.842Zm2.211,2.909H7.421A1.469,1.469,0,0,0,5.947,6.364V16.545A1.469,1.469,0,0,0,7.421,18h8.105A1.469,1.469,0,0,0,17,16.545V6.364A1.469,1.469,0,0,0,15.526,4.909Zm0,11.636H7.421V6.364h8.105Z"></path></svg></path></svg><span>Zkopírovat&nbsp;odkaz</span></button>        </div>    </div>';
	
	$(shareiconEl).appendTo('#product_detail .col-sm-12:has(.description)');
	

	$('#sh-facebook-icon').attr('onclick', $('.icon.fb_share > a').attr('href'));
	$('#sh-twitter-icon').insertAfter('#sh-facebook-icon');
	
	
	var fbShareUrl = "https://www.facebook.com/share.php?u=" + url + "&t=" + text;
	$('#sh-facebook-icon').attr('href', fbShareUrl);

    var twitterIntentUrl = "https://twitter.com/intent/tweet?url=" + url + "&text=" + text;
    $('#sh-twitter-icon').attr('href', twitterIntentUrl);

    document.addEventListener('click', function(event) {
        const shareIcon = document.querySelector('.share-icon');
        const isClickInsideShareIcon = shareIcon.contains(event.target);
    
        // If the clicked element is not inside the .share-icon and .share-icon has the .open class
        if (!isClickInsideShareIcon && shareIcon.classList.contains('open')) {
            $('.share-icon').removeClass('open');
        }
    });
}

