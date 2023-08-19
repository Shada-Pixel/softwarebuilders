


function formsubmit(){
    $("form#course-store").submit();
}


$(document).ready(function () {

    $("form #name").on('blur', () => {
        const slug = slugify($("form #name").val());
        $("form #slug").val(slug);
    });

    // Calling classic editor function
    createEditor('#short_description');
    createEditor('#description');
    createEditor('#materials');
    createEditor('#curriculam');
});
