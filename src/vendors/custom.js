
$(document).ready(function () {
    // Datatables global search functionality
    $('#global-search').on('keyup', function () {
        if (this.value.length >= 3) {
            $('#datatable').DataTable().search(this.value).draw();
        } else if (this.value.length === 0) {
            $('#datatable').DataTable().search('').draw();
        }
    });
});


const intervalId = setInterval(function () {
    if ($('.success-error-message').is(':visible')) {
        $('.success-error-message').css('display', 'none');
        clearInterval(intervalId);  // stop the interval once hidden
    }
}, 3000);

let isDeleteConfirmed = false;
let clickedElementForDeleteConfirmation = false;
let myDeleteConfirmationModal = false;

function openDeleteModal(passedElement, title = "Are you sure you want to delete this user?", description = "This user will be permanently removed.") {
    clickedElementForDeleteConfirmation = passedElement;
    Swal.fire({
        title: title,
        text: description,
        iconHtml: '<i class="icon-info-circle text-xl text-danger bg-red-100 size-9 flex items-center justify-center rounded-full"></i>',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancel',
        customClass: {
            confirmButton: 'kt-btn kt-btn-red',
            cancelButton: 'kt-btn kt-btn-white',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            isDeleteConfirmed = true;
            console.log('Delete confirmed:', isDeleteConfirmed); // Log for debugging
            $(clickedElementForDeleteConfirmation).addClass('clickedFromDeleteConfirmationPopup');
            if (clickedElementForDeleteConfirmation) {
                if (clickedElementForDeleteConfirmation.is('a')) {
                    const href = clickedElementForDeleteConfirmation.attr('href');
                    if (href && href !== 'javascript:void(0);') {
                        window.location.href = href;  // Redirect manually
                    } else if (href === 'javascript:void(0);') {
                        clickedElementForDeleteConfirmation.click();
                    }
                }
                else {
                    clickedElementForDeleteConfirmation.click();
                }
            }
            // myDeleteConfirmationModal.hide();

            // 👉 Call your delete function here
            // e.g., deleteItem(clickedElementForDeleteConfirmation);
        } else {
            isDeleteConfirmed = false;
        }
    });
}

function checkUserChoiceForDeleteConfirmation() {
    return isDeleteConfirmed;
}



let count = 1;
let counterInterval;
// Function to update the counter and progress bar
function updateCustomLoader(pauseCount, loaderText) {
    const loader = document.getElementById("loader");
    const counter = document.getElementById("counter");
    const progressBar = document.getElementById("progress");
    const loaderTextContainer = document.getElementById("custom-loader-text");
    if ($('.loader-container').is(':hidden')) {
        $('.loader-container').show();
    }
    if (loaderText) {
        loaderTextContainer.textContent = loaderText;
    }
    const interval = setInterval(() => {
        if (count <= pauseCount && count <= 100) {
            counter.textContent = count + "%";
            progressBar.style.width = `${count}%`;
            count++;
        } else {
            clearInterval(interval);
            console.log(count)
            if (count > 100) {
                pauseCustomLoader();
            }
        }
    }, 100);
}

function pauseCustomLoader() {
    loader.style.display = "none";
};

function resetCustomLoader() {
    count = 1;
    document.getElementById("progress").style.width = `0%`;
};

const countdownEl = document.getElementById('countdown');
const redirectUrl = window.location.href; // Redirect to current page or set to desired URL
let countdownInterval;

function formatTime(seconds) {
    const mins = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `00:${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
}

function startCountdown(duration) {
    let timeLeft = duration;

    // Show initial time
    countdownEl.textContent = formatTime(timeLeft);

    // Clear any existing interval
    clearInterval(countdownInterval);

    countdownInterval = setInterval(() => {
        timeLeft--;
        countdownEl.textContent = formatTime(timeLeft);

        if (timeLeft <= 0) {
            clearInterval(countdownInterval);
            window.location.href = redirectUrl;
        }
    }, 1000);
}



const upgradePlanPopupEl = document.querySelector('#upgradeplanModal');
const upgradePlanPopup = KTModal.getInstance(upgradePlanPopupEl);
if (upgradePlanPopupEl) {
    upgradePlanPopup.on('shown', () => {
        startCountdown(90); // 90 seconds = 1 min 30 sec
    });
    upgradePlanPopup.on('hide', () => {
        clearInterval(countdownInterval);
    });
}


function initCustomSlider(
    fromPopup = false,
    values = [1, 3, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100],
    sliderId = "rangeSlider",
    tooltipId = "tooltip",
    labelsId = "labels",
    fillId = "fillTreck"
) {
    const slider = document.getElementById(sliderId);
    const tooltip = document.getElementById(tooltipId);
    const labelsContainer = document.getElementById(labelsId);
    const rangeBg = document.getElementById(fillId);

    slider.max = values.length - 1;
    const thumbWidth = 24; // known thumb width

    // Generate labels
    labelsContainer.innerHTML = "";
    values.forEach((val, i) => {
        const span = document.createElement("span");
        span.textContent = val;
        const percent = (i / (values.length - 1)) * 100;
        span.style.left = percent + "%";
        labelsContainer.appendChild(span);
    });

    function updateUI() {
        const index = parseInt(slider.value);
        const value = values[index];
        const percent = index / (values.length - 1);

        // Ensure correct width including padding
        const sliderRect = slider.getBoundingClientRect();
        const sliderWidth = sliderRect.width;

        // Compute tooltip left position
        const computedLeft = percent * (sliderWidth - thumbWidth) + thumbWidth / 2;
        tooltip.style.left = computedLeft + "px";
        tooltip.style.transform = "translateX(-50%)";

        tooltip.textContent = `${value} Signature${value > 1 ? 's' : ''}`;

        // Update filled track
        rangeBg.style.width = (percent * 100) + "%";

        if (typeof updatePlanDetails === 'function') {
            updatePlanDetails(value);
        }
        if (typeof updateRenewaccountPlanDetails === 'function') {
            updateRenewaccountPlanDetails(value);
        }
        if (typeof updatePurchasePlanDetails === 'function') {
            updatePurchasePlanDetails(value);
        }
        if (typeof updatePlanDetailsDashboard === 'function') {
            updatePlanDetailsDashboard(value);
        }
    }

    // Make sure tooltip positions correctly after DOM is fully ready
    window.addEventListener("load", updateUI);
    slider.addEventListener("input", updateUI);
    window.addEventListener("resize", updateUI);
    if (fromPopup) {
        updateUI();
    }
}

// Bytes conversion
function convertSize(size) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (size == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
    return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

function cropImage(elementId, imageUrl) {
    // First ensure the element exists
    const $element = $(`#${elementId}`);
    if ($element.length === 0) {
        console.error('Croppie element not found:', elementId);
        return;
    }
    
    // Initialize croppie
    $element.croppie({
        url: imageUrl,
        enableExif: true,
        viewport: {
            width: 300,
            height: 300,
            type: 'square'
        },
        boundary: {
            width: 400,
            height: 400
        },
        showZoomer: true,
        enableOrientation: true
    });
}

// Toast notification function
function showToast(variant, title, message) {
    if (typeof KTToast !== 'undefined') {
        switch (variant) {
            case 'success':
                icon = `<i class="icon-check-circle-solid"></i>`;
                break;
            case 'error':
                variant = 'destructive'; // map error to destructive variant
                icon = `<i class="icon-warning"></i>`;
                break;
            case 'warning':
                icon = `<i class="icon-info-circle-solid"></i>`;
                break;
            default:
                icon = `<i class="icon-cancel-circle-solid"></i>`;
                break;
        }

        KTToast.show({
            icon: icon,
            message: `<strong>${title}!</strong> ${message}`,
            variant: variant,
            duration: 3000,
            progress: true,
            pauseOnHover: true
        });
    } else {
        // Fallback to browser alert if KTToast is not available
        alert(`${title}: ${message}`);
    }
}
// Loader display functions
function showLoader() {
    document.querySelector('.loader-image').style.display = 'block';
}

// Hide loader function
function hideLoader() {
    document.querySelector('.loader-image').style.display = 'none';
}

/**
     * Generic Swal helper
     * @param {Object} opts
     * type: 'confirm' | 'success' | 'error' | 'info' | 'warning' | 'question' | 'input'
     * icon: optional icon override (SweetAlert builtin names)
     * title, text, html: content
     * confirmText, cancelText
     * showCancel: boolean
     * input: 'text' | 'email' | 'password' etc (when type==='input')
     * preConfirm: async/validation function (returns value or throws)
     * loader: show loading spinner after confirm (boolean)
     * Returns Promise<SwalResult>
     */
function showSwal(opts = {}) {
    const {
        type = 'confirm',
        icon = (['success', 'error', 'info', 'warning', 'question'].includes(opts.type) ? opts.type : undefined),
        title = 'Are you sure?',
        text = 'This action cannot be undone.',
        html,
        confirmText = 'Yes',
        cancelText = 'Cancel',
        showCancel = true,
        input,
        preConfirm,
        loader = false,
    } = opts;

    const swalConfig = {
        title,
        text: html ? undefined : text,
        html: html,
        icon: icon,
        showCancelButton: showCancel,
        confirmButtonText: confirmText,
        cancelButtonText: cancelText,
        customClass: swalClasses,
        buttonsStyling: false,
        reverseButtons: true,
    };

    if (type === 'input' && input) {
        swalConfig.input = input;
        swalConfig.inputAutoTrim = true;
    }

    if (preConfirm) {
        swalConfig.preConfirm = async (value) => {
            try {
                const result = await preConfirm(value);
                return result === undefined ? value : result;
            } catch (err) {
                Swal.showValidationMessage(err.message || 'Validation failed');
                return false;
            }
        };
        swalConfig.allowOutsideClick = () => !Swal.isLoading();
    }

    if (loader) {
        swalConfig.showLoaderOnConfirm = true;
    }

    return Swal.fire(swalConfig);
}

const swalClasses = {
    htmlContainer: 'font-semibold text-base text-gray-500 pt-1 px-0',
    popup: '!p-8 rounded-xl border-none w-full max-w-[380px] dark:bg-black',
    title: 'font-bold text-xl text-gray-900 p-0',
    closeButton: 'btn btn-xl btn-icon btn-light absolute top-2 right-2',
    confirmButton: 'btn btn-sm btn-primary',
    cancelButton: 'btn btn-sm btn-dark',
    denyButton: 'btn btn-sm btn-light',
    icon: 'mt-0 w-10 h-10 border-none bg-danger-20 text-danger mb-6',
};

// Backwards compatibility wrapper
function showConfirmationAlert(params = {}) {
    return showSwal({
        ...params,
        type: 'confirm',
        confirmText: params.confirmButtonText || 'Yes',
        cancelText: params.cancelButtonText || 'No',
    });
}