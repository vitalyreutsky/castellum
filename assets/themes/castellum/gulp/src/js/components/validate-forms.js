import { validateForms } from "../functions/validate-forms";

const contactsForm = document.querySelector(".form__items");
const formSignIn = document.querySelector(".sign-in__form");
const formResetPassword = document.querySelector(".form__reset");

let hash = window.location.href;
let rules;
let rulesSigIn;
let rulesResetPassword;
let rulesSigUp;

if (hash.includes("de")) {
  // contacts
  rules = [
    {
      ruleSelector: ".form__input-name",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Geben Sie nur die Buchstaben",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Geben Sie mindestens 3 Zeichen ein",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Tragen Sie den Namen ein",
        },
      ],
    },
    {
      ruleSelector: ".form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Geben Sie eine gültige E-Mail-Adresse ein",
        },
      ],
    },
  ];

  // sign in
  rulesSigIn = [
    {
      ruleSelector: ".form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Geben Sie eine gültige E-Mail-Adresse ein",
        },
      ],
    },
    {
      ruleSelector: ".form__input-password",
      rules: [
        {
          rule: "required",
          value: true,
          errorMessage: "Geben Sie ein Passwort ein",
        },
        {
          rule: "minLength",
          value: 6,
          errorMessage: "Geben Sie mindestens 6 Zeichen ein",
        },
      ],
    },
  ];

  // reset password
  rulesResetPassword = [
    {
      ruleSelector: ".form__reset .form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Geben Sie eine gültige E-Mail-Adresse ein",
        },
      ],
    },
  ];

  // sign up
  rulesSigUp = [
    {
      ruleSelector: ".form__input-name",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Geben Sie nur die Buchstaben",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Geben Sie mindestens 3 Zeichen ein",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Tragen Sie den Namen ein",
        },
      ],
    },
    {
      ruleSelector: ".form__input-last-name",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Geben Sie nur die Buchstaben",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Geben Sie mindestens 3 Zeichen ein",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Tragen Sie den Namen ein",
        },
      ],
    },
    {
      ruleSelector: ".form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Geben Sie eine gültige E-Mail-Adresse ein",
        },
      ],
    },
    {
      ruleSelector: ".form__input-site",
      rules: [
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Geben Sie mindestens 3 Zeichen ein",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Füllen Sie die Seite aus",
        },
      ],
    },
    {
      ruleSelector: ".form__input-city",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Geben Sie nur die Buchstaben",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Geben Sie mindestens 3 Zeichen ein",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Füllen Sie die Stadt aus",
        },
      ],
    },
    {
      ruleSelector: ".form__input-adress",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Geben Sie nur die Buchstaben",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Geben Sie mindestens 3 Zeichen ein",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Füllen Sie die Adresse aus",
        },
      ],
    },
  ];
} else {
  // contacts
  rules = [
    {
      ruleSelector: ".form__input-name",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Enter only the letters",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Enter at least 3 characters",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Fill in the name",
        },
      ],
    },
    {
      ruleSelector: ".form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Enter a valid email address",
        },
      ],
    },
  ];

  // sign in
  rulesSigIn = [
    {
      ruleSelector: ".form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Enter a valid email address",
        },
      ],
    },
    {
      ruleSelector: ".form__input-password",
      rules: [
        {
          rule: "required",
          value: true,
          errorMessage: "Enter a password",
        },
        {
          rule: "minLength",
          value: 6,
          errorMessage: "Enter a minimum of 6 characters",
        },
      ],
    },
  ];

  // reset password
  rulesResetPassword = [
    {
      ruleSelector: ".form__reset .form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Enter a valid email address",
        },
      ],
    },
  ];

  // sign up
  rulesSigUp = [
    {
      ruleSelector: ".form__input-name",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Enter only the letters",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Enter at least 3 characters",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Fill in the name",
        },
      ],
    },
    {
      ruleSelector: ".form__input-last-name",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Enter only the letters",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Enter at least 3 characters",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Fill in the name",
        },
      ],
    },
    {
      ruleSelector: ".form__input-mail",
      rules: [
        {
          rule: "email",
          errorMessage: "Enter a valid email address",
        },
      ],
    },
    {
      ruleSelector: ".form__input-site",
      rules: [
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Enter at least 3 characters",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Fill in the site",
        },
      ],
    },
    {
      ruleSelector: ".form__input-city",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Enter only the letters",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Enter at least 3 characters",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Fill in the city",
        },
      ],
    },
    {
      ruleSelector: ".form__input-adress",
      rules: [
        {
          rule: "customRegexp",
          value: /^[A-zА-яЁё]+$/,
          errorMessage: "Enter only the letters",
        },
        {
          rule: "minLength",
          value: 3,
          errorMessage: "Enter at least 3 characters",
        },
        {
          rule: "required",
          value: true,
          errorMessage: "Fill in the address",
        },
      ],
    },
  ];
}

const afterForm = (values) => {
  if (formResetPassword) {
    const formResetPasswordTitle = formResetPassword.querySelector(
      ".form__success--reset span"
    );

    for (let key in values) {
      if (key == "E-mail") {
        formResetPasswordTitle.textContent = values[key];
      }
    }
  }

  contactsForm.classList.add("success");
};

// reset password
const resetPassword = document.querySelector(".form__btn-reset-pass");
const cancelBtn = document.querySelector(".form__btn-cancel");
if (resetPassword) {
  resetPassword.addEventListener("click", () => {
    formSignIn.classList.add("hide");
    formResetPassword.classList.add("show");

    validateForms(".form__reset-pass .form", rulesSigIn, afterForm);
  });
}
if (cancelBtn) {
  cancelBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formSignIn.classList.remove("hide");
    formResetPassword.classList.remove("show");
  });
}

// contacts form
validateForms(".contacts .form__item", rules, afterForm);
// sign in form
validateForms(".sign-in .form__item", rulesSigIn, afterForm);
// reset password
validateForms(".form__reset .form__item", rulesResetPassword, afterForm);
// sign up form
validateForms(".sign-up .form__item", rulesSigUp, afterForm);
