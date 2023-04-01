$(document).ready(function () {
  $("#shopping-cart").on("submit", "form", function (e) {
    e.preventDefault();
    const buttons = $(this).find("button");
    const form = $(this);

    var element = this;

    if (
      e.originalEvent !== undefined &&
      e.originalEvent.submitter !== undefined
    ) {
      var button = e.originalEvent.submitter;
    } else {
      var button = "";
    }

    $.ajax({
      url: $(this).attr("action"),
      type: "post",
      data: $(element).serialize(),
      dataType: "json",
      beforeSend: function () {
        $(button).prop("disabled", true).addClass("loading");
      },
      complete: function () {
        $(button).prop("disabled", false).removeClass("loading");
      },
      success: async function (json) {
        $("#header-cart").load("index.php?route=common/cart|info");
        buttons.attr("disabled", false);
        console.log(form.attr("additional-action"));
        if (form.attr("additional-action") === "remove")
          $.when(form.closest(".cart-item").remove()).then(function () {
            if ($(".cart-item").length === 0) location.href = "/";
          });
        const data = await (
          await fetch("/index.php?route=checkout/cart|getTotals")
        ).json();

        const paymentInfo = {};
        data.map((el) => {
          paymentInfo[el.code] = el;
        });
        $("#total_price_div").text(paymentInfo.total.text);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(
          thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
        );
      },
    });
  });

  $(document).on("click", ".btn-cart-change-quantity", function (e) {
    $(this).attr("disabled", true);
    const input = $(this).closest("form").find('input[name="quantity"]');
    const diff = Number($(this).data("diff"));
    const newQuantity = Number(input.val()) + diff;
    input.val(newQuantity);
    const form = $(this).closest("form");
    let formaction = $(this).attr("formaction");
    let formactionRemove = $(this).attr("formaction-remove");
    if (newQuantity === 0) {
      formaction = formactionRemove;
      form.attr("additional-action", "remove");
    } else {
      form.attr("additional-action", "");
    }
    form.attr("action", formaction);
    form.submit();
  });
});
