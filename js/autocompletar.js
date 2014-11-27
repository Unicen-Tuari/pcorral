    var data = {
            duros: ["sardo",   "filadelfia", "parmesano", "provolone", "chevrette",  "fontina"],
            blandos: ["pategras", "mozzarella", "cremoso", "riccota"]
        };

        $('#q').typeahead({
            minLength: 1,
            order: "asc",
            group: true,
            groupMaxItem: 5,
            hint: true,
            filter: "tipo",
            selector: {
                filter: "input-group-btn",
                filterButton: "btn color",
                dropdown: "dropdown-menu dropdown-menu-right",
                list: "dropdown-menu",
                hint: "form-control"
            },
            source: {
                duro: {
                    data: data.duros
                },
                blando: {
                    data: data.blandos
                }
            },
            debug: true
        });
