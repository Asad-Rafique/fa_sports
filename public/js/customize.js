document.addEventListener("DOMContentLoaded", function () {

    // =========================================================
    // FA SPORTS CUSTOMIZER
    // VERSION 21
    // SEPARATE WHATSAPP FORM FOR EACH SECTION
    // =========================================================

    const companyWhatsapp = "923314033843";

    // =========================================================
    // SECTION CONFIG
    // =========================================================

    const sections = [
        "uniform",
        "shoes",
        "bags",
        "gloves"
    ];

    // =========================================================
    // HELPERS
    // =========================================================

    function getElement(id) {

        return document.getElementById(id);

    }


    function getValue(id) {

        const element = getElement(id);

        if (!element) {
            return "";
        }

        return String(element.value || "").trim();

    }


    function getActiveButtonValue(selector) {

        const activeButton = document.querySelector(
            selector + " button.active"
        );

        if (!activeButton) {
            return "";
        }

        return String(
            activeButton.dataset.value ||
            activeButton.textContent ||
            ""
        ).trim();

    }


    function escapeHtml(value) {

        return String(value || "")
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");

    }


    // =========================================================
    // ERROR HANDLING
    // =========================================================

    function showError(section, message) {

        const errorBox = getElement(
            section + "Error"
        );

        if (!errorBox) {
            return;
        }

        errorBox.textContent = message;

        errorBox.classList.add("show");

        errorBox.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

    }


    function clearError(section) {

        const errorBox = getElement(
            section + "Error"
        );

        if (!errorBox) {
            return;
        }

        errorBox.textContent = "";

        errorBox.classList.remove("show");

    }


    // =========================================================
    // SUMMARY LINE
    // =========================================================

    function summaryLine(label, value) {

        if (!value) {
            return "";
        }

        return `
            <div class="summary-line">
                <strong>${escapeHtml(label)}</strong>
                <span>${escapeHtml(value)}</span>
            </div>
        `;

    }


    // =========================================================
    // UNIFORM DATA
    // =========================================================

    function getUniformData() {

        return {

            category: getActiveButtonValue(
                ".uniform-category"
            ),

            shirtColor: getActiveButtonValue(
                ".uniform-shirt-colors"
            ),

            trouserColor: getActiveButtonValue(
                ".uniform-trouser-colors"
            ),

            shirtText: getValue(
                "uniformShirtText"
            ),

            number: getValue(
                "uniformNumber"
            ),

            shirtSize: getValue(
                "uniformShirtSize"
            ),

            height: getValue(
                "uniformHeight"
            ),

            width: getValue(
                "uniformWidth"
            ),

            sleeve: getValue(
                "uniformSleeve"
            ),

            collar: getValue(
                "uniformCollar"
            ),

            trouserSize: getValue(
                "uniformTrouserSize"
            ),

            trouserLength: getValue(
                "uniformTrouserLength"
            ),

            trouserWidth: getValue(
                "uniformTrouserWidth"
            )

        };

    }


    // =========================================================
    // SHOES DATA
    // =========================================================

    function getShoesData() {

        return {

            category: getValue(
                "shoeCategory"
            ),

            size: getValue(
                "shoeSize"
            ),

            color: getActiveButtonValue(
                ".shoe-colors"
            ),

            text: getValue(
                "shoeText"
            ),

            sole: getValue(
                "shoeSole"
            ),

            width: getValue(
                "shoeWidth"
            )

        };

    }


    // =========================================================
    // BAGS DATA
    // =========================================================

    function getBagsData() {

        return {

            category: getValue(
                "bagCategory"
            ),

            size: getValue(
                "bagSize"
            ),

            color: getActiveButtonValue(
                ".bag-colors"
            ),

            text: getValue(
                "bagText"
            ),

            compartments: getValue(
                "bagCompartments"
            ),

            strap: getValue(
                "bagStrap"
            )

        };

    }


    // =========================================================
    // GLOVES DATA
    // =========================================================

    function getGlovesData() {

        return {

            category: getValue(
                "gloveCategory"
            ),

            hand: getValue(
                "gloveHand"
            ),

            size: getValue(
                "gloveSize"
            ),

            wrist: getValue(
                "gloveWrist"
            ),

            color: getActiveButtonValue(
                ".glove-colors"
            ),

            text: getValue(
                "gloveText"
            )

        };

    }


    // =========================================================
    // UNIFORM SUMMARY
    // =========================================================

    function updateUniformSummary() {

        const summary =
            getElement("uniformSummary");

        if (!summary) {
            return;
        }

        const data =
            getUniformData();

        let html = `
            <span>LIVE SUMMARY</span>

            <div class="summary-content">
        `;

        html += summaryLine(
            "Category",
            data.category
        );

        html += summaryLine(
            "Shirt Color",
            data.shirtColor
        );

        html += summaryLine(
            "Trouser Color",
            data.trouserColor
        );

        html += summaryLine(
            "Text",
            data.shirtText
        );

        html += summaryLine(
            "Number",
            data.number
        );

        html += summaryLine(
            "Shirt Size",
            data.shirtSize
        );

        html += summaryLine(
            "Height",
            data.height
        );

        html += summaryLine(
            "Width",
            data.width
        );

        html += summaryLine(
            "Sleeve",
            data.sleeve
        );

        html += summaryLine(
            "Collar",
            data.collar
        );

        html += summaryLine(
            "Trouser Size",
            data.trouserSize
        );

        html += summaryLine(
            "Trouser Length",
            data.trouserLength
        );

        html += summaryLine(
            "Trouser Width",
            data.trouserWidth
        );

        html += `
            </div>
        `;

        summary.innerHTML = html;

    }


    // =========================================================
    // SHOES SUMMARY
    // =========================================================

    function updateShoesSummary() {

        const summary =
            getElement("shoesSummary");

        if (!summary) {
            return;
        }

        const data =
            getShoesData();

        let html = `
            <span>LIVE SUMMARY</span>

            <div class="summary-content">
        `;

        html += summaryLine(
            "Category",
            data.category
        );

        html += summaryLine(
            "Size",
            data.size
        );

        html += summaryLine(
            "Color",
            data.color
        );

        html += summaryLine(
            "Name / Text",
            data.text
        );

        html += summaryLine(
            "Sole Type",
            data.sole
        );

        html += summaryLine(
            "Width",
            data.width
        );

        html += `
            </div>
        `;

        summary.innerHTML = html;

    }


    // =========================================================
    // BAGS SUMMARY
    // =========================================================

    function updateBagsSummary() {

        const summary =
            getElement("bagsSummary");

        if (!summary) {
            return;
        }

        const data =
            getBagsData();

        let html = `
            <span>LIVE SUMMARY</span>

            <div class="summary-content">
        `;

        html += summaryLine(
            "Category",
            data.category
        );

        html += summaryLine(
            "Size",
            data.size
        );

        html += summaryLine(
            "Color",
            data.color
        );

        html += summaryLine(
            "Name / Text",
            data.text
        );

        html += summaryLine(
            "Compartments",
            data.compartments
        );

        html += summaryLine(
            "Strap Style",
            data.strap
        );

        html += `
            </div>
        `;

        summary.innerHTML = html;

    }


    // =========================================================
    // GLOVES SUMMARY
    // =========================================================

    function updateGlovesSummary() {

        const summary =
            getElement("glovesSummary");

        if (!summary) {
            return;
        }

        const data =
            getGlovesData();

        let html = `
            <span>LIVE SUMMARY</span>

            <div class="summary-content">
        `;

        html += summaryLine(
            "Category",
            data.category
        );

        html += summaryLine(
            "Hand",
            data.hand
        );

        html += summaryLine(
            "Size",
            data.size
        );

        html += summaryLine(
            "Wrist Style",
            data.wrist
        );

        html += summaryLine(
            "Color",
            data.color
        );

        html += summaryLine(
            "Name / Text",
            data.text
        );

        html += `
            </div>
        `;

        summary.innerHTML = html;

    }


    // =========================================================
    // UPDATE SUMMARIES
    // =========================================================

    function updateAllSummaries() {

        updateUniformSummary();

        updateShoesSummary();

        updateBagsSummary();

        updateGlovesSummary();

    }


    // =========================================================
    // SET HIDDEN COLOR VALUES
    // =========================================================

    function updateHiddenColorValue(
        button,
        hiddenInputId
    ) {

        const hiddenInput =
            getElement(hiddenInputId);

        if (!hiddenInput) {
            return;
        }

        hiddenInput.value =
            button.dataset.value || "";

    }


    // =========================================================
    // COLOR / OPTION BUTTONS
    // =========================================================

    const buttonGroups = [

        {
            selector: ".uniform-category",
            hiddenInput: "uniformCategory"
        },

        {
            selector: ".uniform-shirt-colors",
            hiddenInput: "uniformShirtColor"
        },

        {
            selector: ".uniform-trouser-colors",
            hiddenInput: "uniformTrouserColor"
        },

        {
            selector: ".shoe-colors",
            hiddenInput: "shoeColor"
        },

        {
            selector: ".bag-colors",
            hiddenInput: "bagColor"
        },

        {
            selector: ".glove-colors",
            hiddenInput: "gloveColor"
        }

    ];


    buttonGroups.forEach(function (group) {

        document
            .querySelectorAll(
                group.selector + " button"
            )
            .forEach(function (button) {

                button.type = "button";

                button.addEventListener(
                    "click",
                    function (event) {

                        event.preventDefault();
                        event.stopPropagation();

                        /*
                        |--------------------------------------------------
                        | Remove active from other buttons
                        |--------------------------------------------------
                        */

                        const parent =
                            button.parentElement;

                        if (parent) {

                            parent
                                .querySelectorAll("button")
                                .forEach(function (btn) {

                                    btn.classList.remove(
                                        "active"
                                    );

                                });

                        }

                        /*
                        |--------------------------------------------------
                        | Activate selected button
                        |--------------------------------------------------
                        */

                        button.classList.add(
                            "active"
                        );

                        /*
                        |--------------------------------------------------
                        | Save selected value into hidden input
                        |--------------------------------------------------
                        */

                        if (group.hiddenInput) {

                            updateHiddenColorValue(
                                button,
                                group.hiddenInput
                            );

                        }

                        /*
                        |--------------------------------------------------
                        | Clear related error
                        |--------------------------------------------------
                        */

                        const product =
                            button.closest(
                                ".custom-product"
                            );

                        if (product) {

                            clearError(
                                product.id
                            );

                        }

                        /*
                        |--------------------------------------------------
                        | Update summaries
                        |--------------------------------------------------
                        */

                        updateAllSummaries();

                    }
                );

            });

    });


    // =========================================================
    // SELECTS + TEXT INPUTS
    // =========================================================

    document
        .querySelectorAll(
            ".custom-product input, .custom-product select"
        )
        .forEach(function (element) {

            /*
            |----------------------------------------------------------
            | SELECT
            |----------------------------------------------------------
            */

            element.addEventListener(
                "change",
                function () {

                    const product =
                        element.closest(
                            ".custom-product"
                        );

                    if (product) {

                        clearError(
                            product.id
                        );

                    }

                    updateAllSummaries();

                }
            );


            /*
            |----------------------------------------------------------
            | TEXT INPUT
            |----------------------------------------------------------
            */

            element.addEventListener(
                "input",
                function () {

                    const product =
                        element.closest(
                            ".custom-product"
                        );

                    if (product) {

                        clearError(
                            product.id
                        );

                    }

                    updateAllSummaries();

                }
            );

        });


    // =========================================================
    // GET FORM CONTACT DATA
    // =========================================================

    function getContactData(form) {

        const nameInput =
            form.querySelector(
                'input[name="name"]'
            );

        const emailInput =
            form.querySelector(
                'input[name="email"]'
            );

        const phoneInput =
            form.querySelector(
                'input[name="phone"]'
            );

        return {

            name: nameInput
                ? nameInput.value.trim()
                : "",

            email: emailInput
                ? emailInput.value.trim()
                : "",

            phone: phoneInput
                ? phoneInput.value.trim()
                : ""

        };

    }


    // =========================================================
    // VALIDATE CONTACT
    // =========================================================

    function validateContact(
        section,
        form
    ) {

        const contact =
            getContactData(form);

        if (!contact.name) {

            showError(
                section,
                "Please enter your name."
            );

            return false;

        }


        if (!contact.email) {

            showError(
                section,
                "Please enter your email."
            );

            return false;

        }


        /*
        |----------------------------------------------------------
        | Basic email check
        |----------------------------------------------------------
        */

        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(contact.email)) {

            showError(
                section,
                "Please enter a valid email address."
            );

            return false;

        }


        if (!contact.phone) {

            showError(
                section,
                "Please enter your WhatsApp number."
            );

            return false;

        }


        return true;

    }


    // =========================================================
    // CHECK CUSTOMIZATION
    // =========================================================

    function hasUniformCustomization() {

        const data =
            getUniformData();

        return Object.values(data)
            .some(function (value) {

                return value !== "";

            });

    }


    function hasShoesCustomization() {

        const data =
            getShoesData();

        /*
        |----------------------------------------------------------
        | Child is the default category.
        | We don't count it alone as customization.
        |----------------------------------------------------------
        */

        return Boolean(
            data.size ||
            data.color ||
            data.text ||
            data.sole ||
            data.width
        );

    }


    function hasBagsCustomization() {

        const data =
            getBagsData();

        /*
        |----------------------------------------------------------
        | Team Bag is the default category.
        |----------------------------------------------------------
        */

        return Boolean(
            data.size ||
            data.color ||
            data.text ||
            data.compartments ||
            data.strap
        );

    }


    function hasGlovesCustomization() {

        const data =
            getGlovesData();

        /*
        |----------------------------------------------------------
        | Child is the default category.
        |----------------------------------------------------------
        */

        return Boolean(
            data.hand ||
            data.size ||
            data.wrist ||
            data.color ||
            data.text
        );

    }


    // =========================================================
    // BUILD WHATSAPP MESSAGE
    // =========================================================

    function buildWhatsappMessage(
        section,
        form
    ) {

        const contact =
            getContactData(form);

        let message = "";

        // =====================================================
        // HEADER
        // =====================================================

        message +=
            "━━━━━━━━━━━━━━━━━━━━\n";

        message +=
            "        FA SPORTS\n";

        message +=
            "     CUSTOM GEAR REQUEST\n";

        message +=
            "━━━━━━━━━━━━━━━━━━━━\n\n";


        // =====================================================
        // CUSTOMER
        // =====================================================

        message +=
            "👤 CUSTOMER DETAILS\n";

        message +=
            "────────────────────\n\n";

        message +=
            "Name: " +
            contact.name +
            "\n";

        message +=
            "Email: " +
            contact.email +
            "\n";

        message +=
            "WhatsApp: " +
            contact.phone +
            "\n\n";


        // =====================================================
        // UNIFORM
        // =====================================================

        if (section === "uniform") {

            const data =
                getUniformData();

            message +=
                "👕 UNIFORM CUSTOMIZATION\n";

            message +=
                "────────────────────\n\n";

            if (data.category) {

                message +=
                    "Category: " +
                    data.category +
                    "\n";

            }

            if (data.shirtColor) {

                message +=
                    "Shirt Color: " +
                    data.shirtColor +
                    "\n";

            }

            if (data.trouserColor) {

                message +=
                    "Trouser Color: " +
                    data.trouserColor +
                    "\n";

            }

            if (data.shirtText) {

                message +=
                    "Text on Shirt: " +
                    data.shirtText +
                    "\n";

            }

            if (data.number) {

                message +=
                    "Number: " +
                    data.number +
                    "\n";

            }

            if (data.shirtSize) {

                message +=
                    "Shirt Size: " +
                    data.shirtSize +
                    "\n";

            }

            if (data.height) {

                message +=
                    "Height: " +
                    data.height +
                    "\n";

            }

            if (data.width) {

                message +=
                    "Width: " +
                    data.width +
                    "\n";

            }

            if (data.sleeve) {

                message +=
                    "Sleeve: " +
                    data.sleeve +
                    "\n";

            }

            if (data.collar) {

                message +=
                    "Collar: " +
                    data.collar +
                    "\n";

            }

            if (data.trouserSize) {

                message +=
                    "Trouser Size: " +
                    data.trouserSize +
                    "\n";

            }

            if (data.trouserLength) {

                message +=
                    "Trouser Length: " +
                    data.trouserLength +
                    "\n";

            }

            if (data.trouserWidth) {

                message +=
                    "Trouser Width: " +
                    data.trouserWidth +
                    "\n";

            }

        }


        // =====================================================
        // SHOES
        // =====================================================

        if (section === "shoes") {

            const data =
                getShoesData();

            message +=
                "👟 FOOTWEAR CUSTOMIZATION\n";

            message +=
                "────────────────────\n\n";

            if (data.category) {

                message +=
                    "Category: " +
                    data.category +
                    "\n";

            }

            if (data.size) {

                message +=
                    "Size: " +
                    data.size +
                    "\n";

            }

            if (data.color) {

                message +=
                    "Color: " +
                    data.color +
                    "\n";

            }

            if (data.text) {

                message +=
                    "Name / Text: " +
                    data.text +
                    "\n";

            }

            if (data.sole) {

                message +=
                    "Sole Type: " +
                    data.sole +
                    "\n";

            }

            if (data.width) {

                message +=
                    "Width: " +
                    data.width +
                    "\n";

            }

        }


        // =====================================================
        // BAGS
        // =====================================================

        if (section === "bags") {

            const data =
                getBagsData();

            message +=
                "🎒 BAG CUSTOMIZATION\n";

            message +=
                "────────────────────\n\n";

            if (data.category) {

                message +=
                    "Category: " +
                    data.category +
                    "\n";

            }

            if (data.size) {

                message +=
                    "Size: " +
                    data.size +
                    "\n";

            }

            if (data.color) {

                message +=
                    "Color: " +
                    data.color +
                    "\n";

            }

            if (data.text) {

                message +=
                    "Name / Text: " +
                    data.text +
                    "\n";

            }

            if (data.compartments) {

                message +=
                    "Compartments: " +
                    data.compartments +
                    "\n";

            }

            if (data.strap) {

                message +=
                    "Strap Style: " +
                    data.strap +
                    "\n";

            }

        }


        // =====================================================
        // GLOVES
        // =====================================================

        if (section === "gloves") {

            const data =
                getGlovesData();

            message +=
                "🧤 HANDWEAR CUSTOMIZATION\n";

            message +=
                "────────────────────\n\n";

            if (data.category) {

                message +=
                    "Category: " +
                    data.category +
                    "\n";

            }

            if (data.hand) {

                message +=
                    "Hand: " +
                    data.hand +
                    "\n";

            }

            if (data.size) {

                message +=
                    "Size: " +
                    data.size +
                    "\n";

            }

            if (data.wrist) {

                message +=
                    "Wrist Style: " +
                    data.wrist +
                    "\n";

            }

            if (data.color) {

                message +=
                    "Color: " +
                    data.color +
                    "\n";

            }

            if (data.text) {

                message +=
                    "Name / Text: " +
                    data.text +
                    "\n";

            }

        }


        // =====================================================
        // FOOTER
        // =====================================================

        message +=
            "\n━━━━━━━━━━━━━━━━━━━━\n";

        message +=
            "🏆 FA SPORTS\n";

        message +=
            "The Game Starts Before The Game\n";

        message +=
            "━━━━━━━━━━━━━━━━━━━━";


        return message;

    }


    // =========================================================
    // OPEN WHATSAPP
    // =========================================================

    function openWhatsapp(
        section,
        form
    ) {

        const message =
            buildWhatsappMessage(
                section,
                form
            );

        const encodedMessage =
            encodeURIComponent(
                message
            );

        const whatsappUrl =
    "https://api.whatsapp.com/send?phone=" +
    companyWhatsapp +
    "&text=" +
    encodedMessage;

window.location.href = whatsappUrl;

    }


    // =========================================================
    // SUBMIT EACH SECTION SEPARATELY
    // =========================================================

    sections.forEach(function (section) {

        const form =
            document.getElementById(
                section + "Form"
            );

        if (!form) {
            return;
        }


        form.addEventListener(
            "submit",
            async function (event) {

                event.preventDefault();

                clearError(section);


                // =================================================
                // CONTACT VALIDATION
                // =================================================

                if (
                    !validateContact(
                        section,
                        form
                    )
                ) {

                    return;

                }


                // =================================================
                // CUSTOMIZATION VALIDATION
                // =================================================

                let customized = false;


                if (section === "uniform") {

                    customized =
                        hasUniformCustomization();

                }


                if (section === "shoes") {

                    customized =
                        hasShoesCustomization();

                }


                if (section === "bags") {

                    customized =
                        hasBagsCustomization();

                }


                if (section === "gloves") {

                    customized =
                        hasGlovesCustomization();

                }


                if (!customized) {

                    showError(
                        section,
                        "Please customize this section before sending it."
                    );

                    return;

                }


                // =================================================
                // BUTTON
                // =================================================

                const button =
                    form.querySelector(
                        ".whatsapp-button"
                    );

                if (!button) {
                    return;
                }


                const originalText =
                    button.innerHTML;


                button.disabled = true;

                button.classList.add(
                    "is-sending"
                );

                button.innerHTML =
                    "SENDING... <span>↗</span>";


                // =================================================
                // FORM DATA
                // =================================================

                const formData =
                    new FormData(form);


                // =================================================
                // SEND TO LARAVEL
                // =================================================

                try {

                    const response =
                        await fetch(
                            form.action,
                            {
                                method: "POST",

                                body: formData,

                                headers: {
                                    "X-Requested-With":
                                        "XMLHttpRequest",

                                    "Accept":
                                        "application/json"
                                },

                                credentials:
                                    "same-origin"
                            }
                        );


                    // =================================================
                    // SERVER ERROR
                    // =================================================

                    if (!response.ok) {

                        let serverMessage =
                            "Unable to send your request. Please try again.";

                        try {

                            const result =
                                await response.json();

                            if (
                                result.message
                            ) {

                                serverMessage =
                                    result.message;

                            }

                        } catch (jsonError) {

                            // Keep default message.

                        }

                        throw new Error(
                            serverMessage
                        );

                    }


                    // =================================================
                    // SUCCESS
                    // =================================================

                    button.innerHTML =
                        "OPENING WHATSAPP... <span>↗</span>";


                    /*
                    |--------------------------------------------------
                    | Open WhatsApp only after Laravel accepts/saves
                    | the customization.
                    |--------------------------------------------------
                    */

                    openWhatsapp(
                        section,
                        form
                    );


                    // =================================================
                    // SUCCESS STATE
                    // =================================================

                    button.innerHTML =
                        "SENT TO WHATSAPP ✓";


                    button.classList.add(
                        "is-success"
                    );


                } catch (error) {

                    console.error(
                        "FA SPORTS CUSTOMIZER ERROR:",
                        error
                    );


                    showError(
                        section,
                        error.message ||
                        "Something went wrong. Please try again."
                    );


                    button.disabled = false;

                    button.classList.remove(
                        "is-sending"
                    );

                    button.innerHTML =
                        originalText;

                }

            }
        );

    });


    // =========================================================
    // INITIAL SUMMARIES
    // =========================================================

    updateAllSummaries();


    // =========================================================
    // READY
    // =========================================================

    console.log(
        "%cFA SPORTS CUSTOMIZER — VERSION 21 READY",
        "font-weight:bold;font-size:16px;"
    );

});

