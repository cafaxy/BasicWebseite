<footer class="bg-white text-center">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      {{ __('Copyright :date :name. All rights reserved.', [
          'date' => date('Y'),
          'name' => config('app.name')
      ]) }}
    </div>
    <!-- Copyright -->
  </footer>