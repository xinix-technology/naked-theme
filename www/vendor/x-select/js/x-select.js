(function() {
    "use strict";

    var currentScript = document.currentScript || document._currentScript;
    var ownerDocument = document.currentScript.ownerDocument;

    var supports = {
        shadowDOM: (!(HTMLElement.prototype.createShadowRoot + "").match(/watchShadow/))
    };

    var XSelectProto = Object.create(HTMLInputElement.prototype);

    XSelectProto.createdCallback = function() {
        var options,
            that = this;

        this.url = this.getAttribute('url');
        this.foreignkey = this.getAttribute('foreignkey');
        this.foreignlabel = this.getAttribute('foreignlabel');

        this.typeaheadInput = $('<input class="typeahead" type="text" placeholder="">')[0];
        this.typeaheadInput.setAttribute('placeholder', this.getAttribute('placeholder'));

        if (supports.shadowDOM) {
            this.root = this.createShadowRoot();

            this.valueInput = this;
        } else {
            this.style.display = 'none';
            this.root = document.createElement('div');

            this.valueInput = document.createElement('input');
            this.valueInput.type = 'hidden';
            this.valueInput.name = this.name;
            this.root.appendChild(this.valueInput);

            this.root.className = 'x-select-root';
            this.parentNode.appendChild(this.root);

        }

        this.root.appendChild(this.typeaheadInput);

        this.addEventListener('focus', function() {
            this.typeaheadInput.focus();
        });

        if (this.list) {
            options = this.list.querySelectorAll('option');
        }

        if (this.value) {
            if (this.url) {
                $.ajax({
                    'url': this.url + '?$id=' + this.value
                }).done(function(data) {
                    if (data && data.entries && data.entries[0]) {
                        that.typeaheadInput.value = data.entries[0][that.foreignlabel];
                    }
                });
            } else {
                for(var i = 0; i < options.length; i++) {
                    if (options[i].value == this.value) {
                        this.typeaheadInput.value = options[i].innerHTML;
                    }
                }
            }
        }


        var source = function(query, cb) {
            var suggestions = [];

            if (that.url) {
                $.ajax({
                    'url': that.url + '?!match=' + query
                }).done(function(data) {
                    if (data && data.entries) {
                        for(var i in data.entries) {
                            var entry = data.entries[i];
                            suggestions.push({
                                label: entry[that.foreignlabel],
                                value: entry[that.foreignkey]
                            });
                        }
                        cb(suggestions);

                    }
                });
            } else {
                var regex = new RegExp(query, 'i');
                for(var i = 0; i < options.length; i++) {
                    var option = options[i];
                    var label = option.innerHTML;
                    var value = option.value || label;

                    if (regex.test(label)) {
                        suggestions.push({
                            label: label,
                            value: value
                        });
                    }

                }
                cb(suggestions);
            }
        };

        // var bestPictures = new Bloodhound({
        //     datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        //     queryTokenizer: Bloodhound.tokenizers.whitespace,
        //     prefetch: '../data/films/post_1960.json',
        //     remote: '../data/films/queries/%QUERY.json'
        // });
        // bestPictures.initialize();

        $(this.root.querySelector('.typeahead')).typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: this.name,
            displayKey: 'label',
            source: source
        }).on('typeahead:selected', function(evt, o) {
            that.valueInput.value = o.value;
        });

    };

    document.registerElement('x-select', {
        prototype: XSelectProto,
        extends: 'input'
    });
})();