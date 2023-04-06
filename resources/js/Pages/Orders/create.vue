<template>
      <Head title="Invest now"/>
      <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow" v-for="plan in plans" :key="plan.id" style="min-width: 250px; max-width: 310px;">
                  <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{ plan.plan_name }}</h4>
                  </div>
                  <div class="card-body">
                        <h1 class="card-title pricing-card-title">${{ plan.plan_min_price }} - ${{ plan.plan_max_price }} <small class="text-muted">/ {{ plan.plan_duration }} Days</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                              <li>Min Investment: ${{ plan.plan_min_price }}</li>
                              <li>Max Investment: ${{ plan.plan_max_price }}</li>
                              <li>Duration: {{ plan.plan_duration }} Days</li>
                              <li>{{ plan.plan_description }}</li>
                        </ul>
                        <Link :href="`/investment/${plan.id}/invest`">
                              <button type="button" class="btn btn-sm btn-block btn-outline-primary">Invest Now</button>
                        </Link>
                  </div>
            </div>
      </div>
</template>

<script setup>
defineProps({
      plans: Object
})
</script>