$(document).ready(function () {
    addLinkToSetDefaults();
});

function setDefaultsForAll() {
    setDefaultsForPaymentDetailsSection();
}

function addLinkToSetDefaults() {
    $(".section").prev().each(function (i) {
        legendText = $(this).text();
        $(this).text("");

        var setDefaultMethod = "setDefaultsFor" + capitalize($(this).next().attr("id")) + "()";

        newlink = $(document.createElement("a"));
        newlink.attr({
            id:'link-' + i, name:'link' + i, href:'#'
        });
        newlink.append(document.createTextNode(legendText));
        newlink.bind('click', function () {
            eval(setDefaultMethod);
        });

        $(this).append(newlink);
    });

    newbutton = $(document.createElement("input"));
    newbutton.attr({
        id:'defaultAll', value:'Default All', type:'button', onClick:'setDefaultsForAll()'
    });
    $("#payment_form").append(newbutton);
}

function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function setDefaultsForPaymentDetailsSection() {
    $("input[name='locale']").val("en");
    $("input[name='transaction_type']").val("authorization");
    $("input[name='reference_number']").val(new Date().getTime());
    $("input[name='amount']").val("100.00");
    $("input[name='currency']").val("USD");
    $("input[name='card_type']").val("001");
    $("input[name='card_cvn']").val("500");
    $("input[name='card_number']").val("4111111111111111");
    $("input[name='card_expiry_date']").val("12-2022");
    $("input[name='card_cvn']").val("500");
    $("input[name='payment_method']").val("card");
    $("input[name='bill_to_forename']").val("Willie");
    $("input[name='bill_to_surname']").val("Nelson");
    $("input[name='bill_to_email']").val("willie@bogus.com");
    $("input[name='bill_to_address_line1']").val("123 green st");
    $("input[name='bill_to_address_city']").val("San Francisco");
    $("input[name='bill_to_address_state']").val("CA");
    $("input[name='bill_to_address_postal_code']").val("94107");
    $("input[name='bill_to_address_country']").val("US");
}