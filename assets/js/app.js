import {
    MDCCheckbox,
    MDCRadio,
    MDCRipple,
    MDCTextField,
} from './components';

class App {
    constructor () {
        App.initMaterialItems();
    }

    static initMaterialItems() {
        [].forEach.call(document.querySelectorAll('.mdc-text-field'), (EL) => {
            const element = MDCTextField.attachTo(EL);

            if ($(EL).hasClass('mdc-text-field--invalid')) {
                element.useNativeValidation = false;
                element.valid = false;
            }
        });

        [].forEach.call(document.querySelectorAll('.mdc-button'), function(EL) {
            MDCRipple.attachTo(EL);
        });

        [].forEach.call(document.querySelectorAll('.mdc-checkbox'), function(EL) {
            MDCCheckbox.attachTo(EL);
        });

        [].forEach.call(document.querySelectorAll('.mdc-radio'), function(EL) {
            MDCRadio.attachTo(EL);
        });
    }
}

new App();
