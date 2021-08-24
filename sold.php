$("body").on("change", "input.SOLD:checkbox", function ()
    {
        var id = $(this).attr("data-id");
        var data = { id: id, code: "SOLD" };

        var map = $.map($("input.edit:checkbox:checked"), function (el)
        {
            return $(el).attr("data-id");
        });

        if (map.length > 0)
        {

            if ($(this).is(":checked"))
                data["form"] = { 0: { value: "Y", name: "SOLD" } };
            else
                data["form"] = { 0: { value: "N", name: "SOLD" } };
            // send("edit", data);// доделать
        } else
        {
            if ($(this).is(":checked"))
                data["value"] = "Y";
            else
                data["value"] = "N";
            send("edit_one", data);
        }
        // console.log(data)

        $("input.edit:checkbox").prop("checked", false);
    });
