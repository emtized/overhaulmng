/**
 * DataTables Basic
 */

'use strict';

let fv, offCanvasEl;
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    const formAddNewRecord = document.getElementById('form-add-new-record');

    setTimeout(() => {
      const newRecord = document.querySelector('.create-new'),
        offCanvasElement = document.querySelector('#add-new-record');

      // To open offCanvas, to add new record
      if (newRecord) {
        newRecord.addEventListener('click', function () {
          offCanvasEl = new bootstrap.Offcanvas(offCanvasElement);
          // Empty fields on offCanvas open
          (offCanvasElement.querySelector('.dt-full-name').value = ''),
            (offCanvasElement.querySelector('.dt-post').value = ''),
            (offCanvasElement.querySelector('.dt-email').value = ''),
            (offCanvasElement.querySelector('.dt-date').value = ''),
            (offCanvasElement.querySelector('.dt-salary').value = '');
          // Open offCanvas with form
          offCanvasEl.show();
        });
      }
    }, 200);

    // Form validation for Add new record
    fv = FormValidation.formValidation(formAddNewRecord, {
      fields: {
        basicFullname: {
          validators: {
            notEmpty: {
              message: 'وارد کردن نام الزامی است'
            }
          }
        },
        basicPost: {
          validators: {
            notEmpty: {
              message: 'وارد کردن شغل الزامی است'
            }
          }
        },
        basicEmail: {
          validators: {
            notEmpty: {
              message: 'وارد کردن ایمیل الزامی است'
            },
            emailAddress: {
              message: 'مقدار وارد شده یک آدرس ایمیل معتبر نیست'
            }
          }
        },
        basicDate: {
          validators: {
            notEmpty: {
              message: 'وارد کردن تاریخ عضویت الزامی است'
            },
            date: {
              format: 'YYYY/MM/DD',
              message: 'مقدار وارد شده یک تاریخ معتبر نیست'
            }
          }
        },
        basicSalary: {
          validators: {
            notEmpty: {
              message: 'وارد کردن حقوق پایه الزامی است'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-12'
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    });
  })();
});

// datatable (jquery)
