let subscription_plan_id = 0;

$("#input-subscription").on("change", function (e) {
  var element = this;

  $(".subscription").addClass("d-none");

  $("#subscription-description-" + $(element).val()).removeClass("d-none");
});

$("#form-product").on("submit", function (e) {
  e.preventDefault();
  let data = $("#form-product").serialize();

  if (subscription_plan_id !== 0) {
    data += "&subscription_plan_id=" + subscription_plan_id;
  }

  $.ajax({
    url: "index.php?route=checkout/cart|add&language={{ language }}",
    type: "post",
    data,
    dataType: "json",
    contentType: "application/x-www-form-urlencoded",
    cache: false,
    processData: false,
    beforeSend: function () {
      $("#button-cart").prop("disabled", true).addClass("loading");
    },
    complete: function () {
      $("#button-cart").prop("disabled", false).removeClass("loading");
    },
    success: function (json) {
      $("#form-product").find(".is-invalid").removeClass("is-invalid");
      $("#form-product").find(".invalid-feedback").removeClass("d-block");

      if (json["error"]) {
        for (key in json["error"]) {
          $("#input-" + key.replaceAll("_", "-"))
            .addClass("is-invalid")
            .find(
              ".form-control, .form-select, .form-check-input, .form-check-label"
            )
            .addClass("is-invalid");
          $("#error-" + key.replaceAll("_", "-"))
            .html(json["error"][key])
            .addClass("d-block");
        }
      }

      if (json["success"]) {
        toast({ text: json["success"] });

        $("#header-cart").load("index.php?route=common/cart|info");
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});

$(document).ready(function () {
  $(".btn-purchase-type").on("click", async function (e) {
    subscription_plan_id = Number(
      $(this).closest(".purchase-type-container").data("type")
    );
    $(".purchase-type-container").removeClass("selected");
    $(this).closest(".purchase-type-container").addClass("selected");
    console.log(subscription_plan_id);
  });
});
