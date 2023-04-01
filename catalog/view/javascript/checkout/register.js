$("input[name='account']").on("click", function () {
  if ($(this).val() == 1) {
    $("#password").removeClass("d-none");
  } else {
    // If guest hide password field
    $("#password").addClass("d-none");
  }

  if ($(this).val() == 1) {
    $("#agree").removeClass("d-none");
  } else {
    // If guest hide register agree field
    $("#agree").addClass("d-none");
  }
});

$("input[name='account']:checked").trigger("click");

// Customer Group
$("#input-customer-group").on("change", function () {
  var element = this;

  chain.attach(function () {
    return $.ajax({
      url:
        "index.php?route=account/custom_field&language={{ language }}&customer_group_id=" +
        $(element).val(),
      dataType: "json",
      beforeSend: function () {
        $(element).prop("disabled", true);
      },
      complete: function () {
        $(element).prop("disabled", false);
      },
      success: function (json) {
        $(".custom-field").addClass("d-none");
        $(".custom-field").removeClass("required");

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          $(".custom-field-" + custom_field["custom_field_id"]).removeClass(
            "d-none"
          );

          if (custom_field["required"]) {
            $(".custom-field-" + custom_field["custom_field_id"]).addClass(
              "required"
            );
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(
          thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
        );
      },
    });
  });
});

$("#input-customer-group").trigger("change");

$("#input-address-match").on("change", function () {
  if ($(this).prop("checked")) {
    $("#shipping-address").hide();
  } else {
    $("#shipping-address").show();
  }
});

$("#form-register").on("submit", function (e) {
  e.preventDefault();

  var element = this;

  chain.attach(function () {
    return $.ajax({
      url: "index.php?route=checkout/register|save&language={{ language }}",
      type: "post",
      dataType: "json",
      data: $("#form-register").serialize(),
      contentType: "application/x-www-form-urlencoded",
      beforeSend: function () {
        $(element).prop("disabled", true).addClass("loading");
      },
      complete: function () {
        $(element).prop("disabled", false).removeClass("loading");
      },
      success: function (json) {
        $("#form-register").find(".is-invalid").removeClass("is-invalid");
        $("#form-register").find(".invalid-feedback").removeClass("d-block");

        console.log(json);

        if (json["redirect"]) {
          location = json["redirect"];
        }

        if (json["error"]) {
          if (json["error"]["warning"]) {
            $("#alert").prepend(
              '<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' +
                json["error"]["warning"] +
                ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>'
            );
          }

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
          $("#alert").prepend(
            '<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-circle-check"></i> ' +
              json["success"] +
              ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>'
          );

          if ($("#input-register").prop("checked")) {
            $("input[name='account']").prop("disabled", true);
            $("#input-customer-group").prop("disabled", true);
            $("#input-password").prop("disabled", true);
            $("#input-captcha").prop("disabled", true);
            $("#input-register-agree").prop("disabled", true);
          }

          // {% if shipping_required %}
          //   $('#button-shipping-method').trigger('click');
          // {% else %}
          //   $('#button-payment-method').trigger('click');
          // {% endif %}
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(
          thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
        );
      },
    });
  });
});

$("select[name$='_country_id']").on("change", function () {
  var element = this;
  var type = $(this).attr("name").slice(0, -11);

  chain.attach(function () {
    return $.ajax({
      url:
        "index.php?route=localisation/country&language={{ language }}&country_id=" +
        $("#input-" + type + "-country").val(),
      dataType: "json",
      beforeSend: function () {
        $(element).prop("disabled", true);
      },
      complete: function () {
        $(element).prop("disabled", false);
      },
      success: function (json) {
        if (json["postcode_required"] == "1") {
          $("#input-" + type + "-postcode")
            .parent()
            .addClass("required");
        } else {
          $("#input-" + type + "-postcode")
            .parent()
            .removeClass("required");
        }

        html = '<option value="">{{ text_select }}</option>';

        if (json["zone"] && json["zone"] != "") {
          for (i = 0; i < json["zone"].length; i++) {
            html += '<option value="' + json["zone"][i]["zone_id"] + '"';

            if (
              json["zone"][i]["zone_id"] ==
              $("#input-" + type + "-zone").attr("data-oc-value")
            ) {
              html += " selected";
            }

            html += ">" + json["zone"][i]["name"] + "</option>";
          }
        } else {
          html += '<option value="0" selected>{{ text_none }}</option>';
        }

        $("#input-" + type + "-zone").html(html);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(
          thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
        );
      },
    });
  });
});

$("select[name$='_country_id']").trigger("change");
