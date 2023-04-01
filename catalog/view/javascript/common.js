function getURLVar(key) {
  var value = [];

  var query = String(document.location).split("?");

  if (query[1]) {
    var part = query[1].split("&");

    for (i = 0; i < part.length; i++) {
      var data = part[i].split("=");

      if (data[0] && data[1]) {
        value[data[0]] = data[1];
      }
    }

    if (value[key]) {
      return value[key];
    } else {
      return "";
    }
  }
}

$("#input-subscription").on("change", function (e) {
  var element = this;

  $(".subscription").addClass("d-none");

  $("#subscription-description-" + $(element).val()).removeClass("d-none");
});

$("#form-product").on("submit", function (e) {
  e.preventDefault();

  $.ajax({
    url: "index.php?route=checkout/cart|add&language={{ language }}",
    type: "post",
    data: $("#form-product").serialize(),
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
  $(document).on("mouseenter", "[data-bs-toggle='tooltip']", oc_tooltip);

  $(document).on("click", "button", function () {
    $(".tooltip").remove();
  });

  // Date
  var oc_datetimepicker = function () {
    $(this).daterangepicker(
      {
        singleDatePicker: true,
        autoApply: true,
        autoUpdateInput: false,
        locale: {
          format: "YYYY-MM-DD",
        },
      },
      function (start, end) {
        $(this.element).val(start.format("YYYY-MM-DD"));
      }
    );
  };

  $(document).on("focus", ".date", oc_datetimepicker);

  // Time
  var oc_datetimepicker = function () {
    $(this)
      .daterangepicker(
        {
          singleDatePicker: true,
          datePicker: false,
          autoApply: true,
          autoUpdateInput: false,
          timePicker: true,
          timePicker24Hour: true,
          locale: {
            format: "HH:mm",
          },
        },
        function (start, end) {
          $(this.element).val(start.format("HH:mm"));
        }
      )
      .on("show.daterangepicker", function (ev, picker) {
        picker.container.find(".calendar-table").hide();
      });
  };

  $(document).on("focus", ".time", oc_datetimepicker);

  // Date Time
  var oc_datetimepicker = function () {
    $(".datetime").daterangepicker(
      {
        singleDatePicker: true,
        autoApply: true,
        autoUpdateInput: false,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
          format: "YYYY-MM-DD HH:mm",
        },
      },
      function (start, end) {
        $(this.element).val(start.format("YYYY-MM-DD HH:mm"));
      }
    );
  };

  $(document).on("focus", ".datetime", oc_datetimepicker);

  // Alert Fade
  var oc_alert = function () {
    window.setTimeout(function () {
      //$('.alert-dismissible').fadeTo(1000, 0, function () {
      //    $(this).remove();
      //});
    }, 7000);
  };

  $(document).on("click", "button", oc_alert);
});

$(document).ready(function () {
  // Currency
  $("#form-currency .dropdown-item").on("click", function (e) {
    e.preventDefault();

    $("#form-currency input[name='code']").val($(this).attr("href"));

    $("#form-currency").submit();
  });

  // Search
  $("#search").on("keydown", function (e) {
    if (e.keyCode == 13) {
      var url =
        $("base").attr("href") +
        "index.php?route=product/search&language=" +
        $(this).data("lang");

      var value = $("#search").eq(0).val();

      url += "&search=" + encodeURIComponent(value);

      location = url;
    }
  });

  // Menu
  $("#menu .dropdown-menu").each(function () {
    var menu = $("#menu").offset();
    var dropdown = $(this).parent().offset();

    var i =
      dropdown.left +
      $(this).outerWidth() -
      (menu.left + $("#menu").outerWidth());

    if (i > 0) {
      $(this).css("margin-left", "-" + (i + 10) + "px");
    }
  });

  // Product List
  $("#button-list").on("click", function () {
    var element = this;

    $("#button-grid").removeClass("active");
    $("#button-list").addClass("active");

    localStorage.setItem("display", "list");
  });

  // Product Grid
  $("#button-grid").on("click", function () {
    var element = this;

    $("#button-list").removeClass("active");
    $("#button-grid").addClass("active");

    localStorage.setItem("display", "grid");
  });

  // Local Storage
  if (localStorage.getItem("display") == "list") {
    $("#product-list").attr("class", "row row-cols-1 product-list");
    $("#button-list").addClass("active");
  } else {
    $("#button-grid").addClass("active");
  }

  /* Agree to Terms */
  $("body").on("click", ".modal-link", function (e) {
    e.preventDefault();

    var element = this;

    $("#modal-information").remove();

    $.ajax({
      url: $(element).attr("href"),
      dataType: "html",
      success: function (html) {
        $("body").append(html);

        $("#modal-information").modal("show");
      },
    });
  });

  // Cookie Policy
  $("#cookie button").on("click", function () {
    var element = this;

    $.ajax({
      url: $(this).val(),
      type: "get",
      dataType: "json",
      beforeSend: function () {
        $(element).button("loading");
      },
      complete: function () {
        $(element).prop("disabled", false).removeClass("loading");
      },
      success: function (json) {
        if (json["success"]) {
          $("#cookie").fadeOut(400, function () {
            $("#cookie").remove();
          });
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

// Forms
$(document).on("submit", "form[data-oc-toggle='ajax']", function (e) {
  e.preventDefault();

  var element = this;

  var form = e.target;

  var action = $(form).attr("action");

  if (
    e.originalEvent !== undefined &&
    e.originalEvent.submitter !== undefined
  ) {
    var button = e.originalEvent.submitter;
  } else {
    var button = "";
  }

  var formaction = $(button).attr("formaction");

  if (formaction !== undefined) {
    action = formaction;
  }

  var method = $(form).attr("method");

  if (method === undefined) {
    method = "post";
  }

  var enctype = $(element).attr("enctype");

  if (enctype === undefined) {
    enctype = "application/x-www-form-urlencoded";
  }

  // https://github.com/opencart/opencart/issues/9690
  if (typeof CKEDITOR != "undefined") {
    for (instance in CKEDITOR.instances) {
      CKEDITOR.instances[instance].updateElement();
    }
  }

  console.log(e);
  console.log("element " + element);
  console.log("action " + action);
  console.log("button " + button);
  console.log("formaction " + formaction);
  console.log("method " + method);
  console.log("enctype " + enctype);

  $.ajax({
    url: action,
    type: method,
    data: $(form).serialize(),
    dataType: "json",
    cache: false,
    contentType: enctype,
    processData: false,
    beforeSend: function () {
      $(button).prop("disabled", true).addClass("loading");
    },
    complete: function () {
      $(button).prop("disabled", false).removeClass("loading");
    },
    success: function (json) {
      $(".alert-dismissible").remove();
      $(form).find(".is-invalid").removeClass("is-invalid");
      $(form).find(".invalid-feedback").removeClass("d-block");

      console.log(json);

      if (json["redirect"]) {
        location = json["redirect"].replaceAll("&amp;", "&");
      }

      if (typeof json["error"] == "string") {
        toast({ text: json["error"] });
      }

      if (typeof json["error"] == "object") {
        if (json["error"]["warning"]) {
          toast({ type: "warning", text: json["error"]["warning"] });
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
        toast({ text: json["success"] });
        // Refresh
        var url = $(form).attr("data-oc-load");
        var target = $(form).attr("data-oc-target");

        if (url !== undefined && target !== undefined) {
          $(target).load(url);
        }
      }

      // Replace any form values that correspond to form names.
      for (key in json) {
        $(form)
          .find("[name='" + key + "']")
          .val(json[key]);
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});

// Upload
$(document).on("click", "button[data-oc-toggle='upload']", function () {
  var element = this;

  if (!$(element).prop("disabled")) {
    $("#form-upload").remove();

    $("body").prepend(
      '<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" value=""/></form>'
    );

    $("#form-upload input[name='file']").trigger("click");

    $("#form-upload input[name='file']").on("change", function (e) {
      if (this.files[0].size / 1024 > $(element).attr("data-oc-size-max")) {
        alert($(element).attr("data-oc-size-error"));

        $(this).val("");
      }
    });

    if (typeof timer !== "undefined") {
      clearInterval(timer);
    }

    var timer = setInterval(function () {
      if ($("#form-upload input[name='file']").val() != "") {
        clearInterval(timer);

        $.ajax({
          url: $(element).attr("data-oc-url"),
          type: "post",
          data: new FormData($("#form-upload")[0]),
          dataType: "json",
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function () {
            $(element).prop("disabled", true).addClass("loading");
          },
          complete: function () {
            $(element).prop("disabled", false).removeClass("loading");
          },
          success: function (json) {
            console.log(json);

            if (json["error"]) {
              alert(json["error"]);
            }

            if (json["success"]) {
              alert(json["success"]);
            }

            if (json["code"]) {
              $($(element).attr("data-oc-target")).attr("value", json["code"]);
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            console.log(
              thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
            );
          },
        });
      }
    }, 500);
  }
});

// Chain ajax calls.
class Chain {
  constructor() {
    this.start = false;
    this.data = [];
  }

  attach(call) {
    this.data.push(call);

    if (!this.start) {
      this.execute();
    }
  }

  execute() {
    if (this.data.length) {
      this.start = true;

      var call = this.data.shift();

      var jqxhr = call();

      jqxhr.done(function () {
        chain.execute();
      });
    } else {
      this.start = false;
    }
  }
}

var chain = new Chain();

// Autocomplete
(function ($) {
  $.fn.autocomplete = function (option) {
    return this.each(function () {
      var $this = $(this);
      var $dropdown = $("#" + $this.attr("list"));

      this.timer = null;
      this.items = [];

      $.extend(this, option);

      // Focus
      $this.on("focus", function () {
        this.request();
      });

      // Keydown
      $this.on("input", function (e) {
        this.request();

        var value = $this.val();

        if (value && this.items[value]) {
          this.select(this.items[value]);
        }
      });

      // Request
      this.request = function () {
        clearTimeout(this.timer);

        this.timer = setTimeout(
          function (object) {
            object.source($(object).val(), $.proxy(object.response, object));
          },
          50,
          this
        );
      };

      // Response
      this.response = function (json) {
        var html = "";
        var category = {};
        var name;
        var i = 0,
          j = 0;

        if (json.length) {
          for (i = 0; i < json.length; i++) {
            // update element items
            this.items[json[i]["label"]] = json[i];

            if (!json[i]["category"]) {
              // ungrouped items
              html += "<option>" + json[i]["label"] + "</option>";
            } else {
              // grouped items
              name = json[i]["category"];

              if (!category[name]) {
                category[name] = [];
              }

              category[name].push(json[i]);
            }
          }

          for (name in category) {
            for (j = 0; j < category[name].length; j++) {
              html +=
                '<option value="' +
                category[name][j]["label"] +
                '">' +
                name +
                "</option>";
            }
          }
        }

        $dropdown.html(html);
      };
    });
  };
})(window.jQuery);

// custom dropdown
$(document).ready(function () {
  $(document).on("click", "[data-custom-dropdown-toggle]", function (e) {
    e.stopPropagation();
    const dropdown = $(`#${$(this).data("custom-dropdown-toggle")}`);
    dropdown.show();
  });

  $(document).on("click", "body", function (e) {
    let isDropdown = false;
    $(e.target)
      .parents()
      .each(function () {
        const id = $(this).attr("id");
        const handlers = $(`[data-custom-dropdown-toggle="${id}"]`).length;
        if (handlers > 0) isDropdown = true;
      });
    if (!isDropdown) {
      $("[data-custom-dropdown-toggle]").each(function () {
        const dropdown = $(`#${$(this).data("custom-dropdown-toggle")}`);
        dropdown.hide();
      });
    }
  });
});

let toast_id = 0;

function toast({ type = "success", text }) {
  toast_id++;

  const my_toast_id = toast_id;
  const colors = {
    success: "green",
    warning: "yellow",
    error: "red",
    info: "blue",
    dark: "gray",
  };

  let duration = 5000;

  $("#alert").prepend(`
    <div id="toast-${my_toast_id}" class="alert-item sm:min-w-[400px] flex p-4 mb-4 text-${colors[type]}-800 border-t-4 border-${colors[type]}-300 bg-${colors[type]}-50 dark:text-${colors[type]}-400 dark:bg-gray-800 dark:border-${colors[type]}-800" role="alert">
      <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
      <div class="ml-3 text-sm font-medium">
      ${text}
      </div>
      <button type="button" onclick="$(this).closest('.alert-item').hide()" class="ml-auto -mx-1.5 -my-1.5 bg-${colors[type]}-50 text-${colors[type]}-500 rounded-lg focus:ring-2 focus:ring-${colors[type]}-400 p-1.5 hover:bg-${colors[type]}-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-${colors[type]}-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
  `);

  setTimeout(function () {
    $(`#toast-${my_toast_id}`).remove();
  }, duration);
}
