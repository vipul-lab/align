<span>Monthly</span>
<input class="kt-switch" type="checkbox" role="switch" id="plan_type" name="plan_type"
    value="{{ $plan->type == '1' ? $plan->type : '1' }}" name="checkbox" {{ $plan->type == '3' ? 'checked' : '' }}>
<span>Yearly</span>