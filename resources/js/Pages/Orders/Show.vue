<template>
    <Head title="Invest now" />
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-header"><h3 class="text-dark">Plan Details</h3></div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Plan Name</th>
                                <td>{{ plan.plan_name}}</td>
                            </tr>
                            <tr>
                                <th>Plan Durations</th>
                                <td>{{ plan.plan_duration }} Days</td>
                            </tr>
                            <tr>
                                <th>Daily Profit</th>
                                <td>{{ plan.daily_profit }}% - Daily</td>
                            </tr>
                            <tr>
                                <th>Minimum Investment</th>
                                <td>{{vueNumberFormat(`${plan.plan_min_price * 100}`, {})}}</td>
                            </tr>
                            <tr>
                                <th>Maximum Investment</th>
                                <td>{{vueNumberFormat(`${plan.plan_max_price * 100}`, {})}}</td>
                            </tr>
                            <tr>
                                <th>Plan Description</th>
                                <p class="pt-3">{{ plan.plan_description }}</p>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-header"><h3 class="text-dark">Subscribe to plan</h3></div>
                <div class="card-body">
                    <form @submit.prevent="subscribeNow" autocomplete="off">
                        <div class="form-group mb-3">
                            <label for="plan_name" class="text-dark">Plan Name</label>
                            <input type="text" name="plan_name" id="plan_name" readonly v-bind:value="plan.plan_name" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mb-3">
                            <label for="plan_duration" class="text-dark">Plan Duration <small>in Days</small></label>
                            <input type="text" name="plan_duration" id="plan_duration" readonly v-bind:value="plan.plan_duration" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mb-3">
                              <label for="payment_method" class="text-dark">Select Payment Method</label>
                              <select class="form-control" v-model="form.gateway" id="">
                                <option value="BTC">Bitcoin</option>
                                <option value="LTC">Litecoin</option>
                                <option value="BNB">Binance coin</option>
                              </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="amount" class="text-dark">Amount</label>
                            <input type="text" :required="required" :max="plan.plan_max_price" :min="plan.plan_min_price" name="amount" id="amount" v-model="form.amount" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mt-3 text-center">
                            <button class="btn btn-lg btn-outline-behance" :type="submit">Proceed...</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia';
import { reactive } from 'vue'

defineProps({
    plan: Object,
});

const form = reactive({
      gateway : '',
      amount: '',
})

let subscribeNow = () => {
      Inertia.post('investment/subscribe', form)
}
</script>
