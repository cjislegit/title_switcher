var $j = jQuery.noConflict();

$j(document).ready(function() {

    let submit = () => {
        let newTitles = [];
        let tempTitles = $j('.newTitles');
        delete tempTitles.length;
        Object.values(tempTitles).forEach(element => {
            console.log(element);
        });
    }

    $j("#submit").click(submit);

});

