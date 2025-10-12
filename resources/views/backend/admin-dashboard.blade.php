@extends('backend.master')
@section('content')

<!-- QUICK STATS -->
<section class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
  <div class="p-5 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="text-gray-500 dark:text-gray-400 text-sm">Total Students</h3>
    <p class="text-3xl font-bold text-primary">5,000+</p>
  </div>
  <div class="p-5 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="text-gray-500 dark:text-gray-400 text-sm">Total Teachers</h3>
    <p class="text-3xl font-bold text-primary">200+</p>
  </div>
  <div class="p-5 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="text-gray-500 dark:text-gray-400 text-sm">Active Courses</h3>
    <p class="text-3xl font-bold text-primary">350+</p>
  </div>
  <div class="p-5 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="text-gray-500 dark:text-gray-400 text-sm">Total Revenue</h3>
    <p class="text-3xl font-bold text-primary">৳120k</p>
  </div>
</section>

<!-- ANALYTICS -->
<section class="p-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
  <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
    <h3 class="font-semibold mb-4 text-lg">Monthly Student Enrollment</h3>
    <canvas id="enrollChart" height="150"></canvas>
  </div>
  <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
    <h3 class="font-semibold mb-4 text-lg">Revenue Overview</h3>
    <canvas id="revenueChart" height="150"></canvas>
  </div>
</section>

<!-- RECENT ACTIVITIES -->
<section class="p-6 mt-6 bg-white dark:bg-gray-800 rounded-xl shadow">
  <h3 class="font-semibold mb-4 text-lg">Recent Activities</h3>
  <ul class="divide-y divide-gray-200 dark:divide-gray-700">
    <li class="py-3 flex justify-between items-center">
      <div>New student <span class="font-semibold">John Doe</span> enrolled in Batch 1</div>
      <div class="text-gray-400 text-sm">2 min ago</div>
    </li>
    <li class="py-3 flex justify-between items-center">
      <div>Teacher <span class="font-semibold">Jane Smith</span> added a course</div>
      <div class="text-gray-400 text-sm">1 hour ago</div>
    </li>
    <li class="py-3 flex justify-between items-center">
      <div>Manager <span class="font-semibold">Mike Johnson</span> updated settings</div>
      <div class="text-gray-400 text-sm">3 hours ago</div>
    </li>
  </ul>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Enrollment Line Chart
  const enrollCtx = document.getElementById('enrollChart');
  if(enrollCtx) {
    new Chart(enrollCtx, {
      type: 'line',
      data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun'],
        datasets: [{
          label: 'Students',
          data: [300,500,700,800,1200,1500],
          borderColor:'#2563eb',
          backgroundColor:'rgba(37,99,235,0.2)',
          tension:0.3,
          fill:true
        }]
      },
      options:{responsive:true, scales:{y:{beginAtZero:true}}}
    });
  }

  // Revenue Bar Chart
  const revenueCtx = document.getElementById('revenueChart');
  if(revenueCtx) {
    new Chart(revenueCtx, {
      type:'bar',
      data:{
        labels:['Jan','Feb','Mar','Apr','May','Jun'],
        datasets:[{
          label:'Revenue',
          data:[2000,3500,5000,4500,6000,7000],
          backgroundColor:'#7c3aed'
        }]
      },
      options:{responsive:true, scales:{y:{beginAtZero:true}}}
    });
  }
});
</script>
@endpush

@endsection
