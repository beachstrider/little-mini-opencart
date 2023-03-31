$("#shopping-cart").on("submit", "form", function (e) {
  e.preventDefault();

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
    url: $(button).attr("formaction"),
    type: "post",
    data: $(element).serialize(),
    dataType: "json",
    beforeSend: function () {
      $(button).prop("disabled", true).addClass("loading");
    },
    complete: function () {
      $(button).prop("disabled", false).removeClass("loading");
    },
    success: function (json) {
      console.log(json);

      if (json["redirect"]) {
        location = json["redirect"];
      }

      if (json["error"]) {
        $("#alert").prepend(
          '<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' +
            json["error"] +
            ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>'
        );
      }

      if (json["success"]) {
        $("#alert").prepend(
          '<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' +
            json["success"] +
            ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>'
        );
      }

      $("#shopping-cart").load(
        "index.php?route=checkout/cart|list&language={{ language }}",
        {},
        function () {
          $("#cart-dropdown").load(
            "index.php?route=common/cart|info&language={{ language }}"
          );
        }
      );
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});
