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
        $("#alert").prepend(`
          <div class="alert-item sm:min-w-[400px] flex p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium">
              ${json["success"]}
            </div>
            <button type="button" onclick="$(this).closest('.alert-item').hide()" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
              <span class="sr-only">Dismiss</span>
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </div>
        `);

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
