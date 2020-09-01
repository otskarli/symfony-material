import {MDCCheckbox} from '@material/checkbox';
import {MDCChipSet} from '@material/chips';
import {MDCDrawer} from '@material/drawer';
import {MDCFormField} from '@material/form-field';
import {MDCIconButtonToggle} from '@material/icon-button';
import {MDCLinearProgress} from '@material/linear-progress';
import {MDCList} from '@material/list';
import {MDCMenu} from '@material/menu';
import {MDCRadio} from '@material/radio';
import {MDCRipple} from '@material/ripple/index';
import {MDCSelect} from '@material/select';
import {MDCSlider} from '@material/slider';
import {MDCSnackbar} from '@material/snackbar';
import {MDCSwitch} from '@material/switch';
import {MDCTabBar} from '@material/tab-bar';
import {MDCTextField} from '@material/textfield';
import {MDCTextFieldHelperText} from '@material/textfield/helper-text';
import {MDCTopAppBar} from '@material/top-app-bar';
import {MDCDataTable} from '@material/data-table';
import {MDCMenuSurface} from '@material/menu-surface';
import {MDCTextFieldIcon} from '@material/textfield/icon';

class MaterialDesign {
    static init (context = document) {
        MaterialDesign.initFormComponents(context);

        const topAppBar = MDCTopAppBar.attachTo(context.querySelector('.mdc-top-app-bar'));
        const drawer = MDCDrawer.attachTo(context.querySelector('.mdc-drawer'))
            topAppBar.setScrollTarget(context.getElementById('main-content'));
            topAppBar.listen('MDCTopAppBar:nav', () => {
                drawer.open = !drawer.open;
            });

        [].forEach.call(context.querySelectorAll('.mdc-tab-bar'), function(EL) {
            MDCTabBar.attachTo(EL);
        });
    }

    static initFormComponents (context) {
        [].forEach.call(context.querySelectorAll('.mdc-text-field'), (EL) => {
            const element = MDCTextField.attachTo(EL);

            if ($(EL).hasClass('mdc-text-field--invalid')) {
                element.useNativeValidation = false;
                element.valid = false;
            }
        });

        [].forEach.call(context.querySelectorAll('.mdc-button'), function(EL) {
            MDCRipple.attachTo(EL);
        });

        [].forEach.call(context.querySelectorAll('.mdc-checkbox'), function(EL) {
            MDCCheckbox.attachTo(EL);
        });

        [].forEach.call(context.querySelectorAll('.mdc-radio'), function(EL) {
            MDCRadio.attachTo(EL);
        });

        [].forEach.call(context.querySelectorAll('.mdc-text-field-icon'), function(EL) {
            MDCTextFieldIcon.attachTo(EL);
        });

        [].forEach.call(context.querySelectorAll('.mdc-select'), function(EL) {
            const select = new MDCSelect(EL);

            select.listen('MDCSelect:change', (evt) => {
                // if select is changed initially, we check for value to be preset to trigger the change event for select element also
                if (evt.detail.index >= 0) {
                    const $selectElement = $(select.root_.firstElementChild);
                    $selectElement.val(select.value);
                    $selectElement.trigger('change');
                }
            });

            // if select has no option for that value, we reset the text also
            if (!select.value) {
                const $selectElement = $(select.root_);
                $selectElement.find('.mdc-select__selected-text').text('')
            }

            // if select has error, we clear the value
            if ($(EL).hasClass('mdc-text-field--invalid')) {
                select.value = null;
            }
        });

        [].forEach.call(context.querySelectorAll('.mdc-list'), function(EL) {
            const list = new MDCList(EL);
            list.listElements.map((listItemEl) => {
                MDCRipple.attachTo(listItemEl);
            });
        });
    }
}

$(function () {
    MaterialDesign.init();
})
