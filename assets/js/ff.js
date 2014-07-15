(function () {
    var FavoritedForm = function (form) {
        this.el = $(form);
        this.icon = this.el.find('i');

        this.toggleVisuals = function () {
            if (this.lessonIsFavorited()) {
                return this.applyUnfavoritedIcon();
            }

            this.applyFavoritedIcon();
        };

        this.lessonIsFavorited = function () {
            return this.el.find('i').hasClass('favorite');
        };

        this.applyFavoritedIcon = function () {
            this.icon.removeClass('unfavorite').addClass('favorite');
        };

        this.applyUnfavoritedIcon = function () {
            this.icon.removeClass('favorite').addClass('unfavorite');
        };

        this.save = function () {
            $.post(this.el[0].action, this.el);
        };
    };

    $('form.favorite-form').on('submit', function (e) {
        var favoritedForm = new FavoritedForm(this);

        favoritedForm.toggleVisuals();
        favoritedForm.save();

        e.preventDefault();
    });
 })();