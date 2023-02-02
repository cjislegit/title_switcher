var $j = jQuery.noConflict();

$j(document).ready(function() {

    let submit = () => {
        let newTitles = [];
        let tempTitles = $j('.newTitles');
        delete tempTitles.length;
        delete tempTitles.prevObject;
        Object.values(tempTitles).forEach(element => {
           newTitles.push([element.id, element.value]);
        });
        console.log(newTitles);
    }

    $j("#submit").click(submit);

});

