<input type="hidden" id="plan_unit" name="plan_unit" value="{{ $planUnit }}" />
<div
    class="kt-card bg-transparent bg-transparent! sm:bg-white! sm:rounded-2xl! border-transparent! sm:border-gray-100! sm:shadow-[0px_2px_15px_0px_#00000014]! w-full max-sm:max-w-[90%] mx-auto">
    <div class="kt-card-content relative px-0 sm:p-8 sm:pb-6 pt-10 sm:pt-13 sm:pr-11">
        <div class="relative">
            <div class="rangeTooltip text-xs" id="tooltip">1 Signatures</div>
            <input type="range" class="appearance-none block !h-5 relative z-[1] bg-transparent !w-full"
                id="rangeSlider" min="0" max="21" step="1" value="0">
            <div class="h-1.5 bg-gray-200 absolute w-full top-1/2 -translate-y-1/2 rounded-full">
            </div>
            <div class="h-1.5 absolute top-1/2 -translate-y-1/2 rounded-full bg-gradient" id="fillTreck"></div>
        </div>
        <div class="labels hidden lg:flex justify-between mt-4 *:w-6 *:text-center" id="labels">
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const rangeSlider = document.getElementById('rangeSlider');
        const tooltip = document.getElementById('tooltip');
        const fillTrack = document.getElementById('fillTreck');
        const planUnitInput = document.getElementById('plan_unit');
        // Signature count mapping based on slider position (matches PlanUnitController)
        const signatureMap = [1, 3, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100];        // Update slider appearance and values

        function updateSlider(rangeValue = null) {
            if (rangeValue !== null) {
                rangeSlider.value = rangeValue;
            }
            const value = parseInt(rangeSlider.value);
            const max = parseInt(rangeSlider.max);
            const percentage = (value / max) * 100;
            const tooltipPercentage = (value / (max - 1)) * 100; // Adjust thumb position slightly

            // Update fill track width
            fillTrack.style.width = percentage + '%';

            // Get signature count from mapping
            const signatureCount = signatureMap[value] || 1;
            console.log('signatureCount:', signatureCount);
            // Update tooltip text and position
            const tooltipPercent = value / (signatureMap.length - 1);
            const sliderRect = rangeSlider.getBoundingClientRect();
            const sliderWidth = sliderRect.width;
            const thumbWidth = 21; // Approximate width of the thumb

            // Compute tooltip left position
            const computedLeft = tooltipPercent * (sliderWidth - thumbWidth) + thumbWidth / 2;
            tooltip.style.left = computedLeft + "px";
            tooltip.style.transform = "translateX(-50%)";
            tooltip.textContent = signatureCount + ' Signature' + (signatureCount > 1 ? 's' : '');

            // Update hidden inputs
            planUnitInput.value = signatureCount; // Plan unit starts from 1
            console.log('planUnitInput.value:', planUnitInput.value);
            // Update displayed signature count in plan
            const signatureDisplays = document.querySelectorAll('.no_employee_qarter');
            signatureDisplays.forEach(display => {
                display.textContent = signatureCount;
            });
        }

        // Generate slider labels
        function generateLabels() {
            const labelsContainer = document.getElementById('labels');
            if (labelsContainer) {
                labelsContainer.innerHTML = '';
                signatureMap.forEach((count, index) => {
                    const label = document.createElement('div');
                    label.textContent = count;
                    label.className = 'text-xs text-gray-700';
                    labelsContainer.appendChild(label);
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Initial function calls
            const planUnit = parseInt(planUnitInput.value);
            const rangeIndex = signatureMap.indexOf(planUnit);
            updateSlider(rangeIndex);
            generateLabels();
        });
    </script>
@endpush