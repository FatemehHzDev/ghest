<?php

use App\Models\Customer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Volt\Component;

?>

<div>


    <?php if (isset($component)) { $__componentOriginal275950880bc546c65912d3d28527d846 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal275950880bc546c65912d3d28527d846 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.btn_modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('btn.btn_modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal275950880bc546c65912d3d28527d846)): ?>
<?php $attributes = $__attributesOriginal275950880bc546c65912d3d28527d846; ?>
<?php unset($__attributesOriginal275950880bc546c65912d3d28527d846); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal275950880bc546c65912d3d28527d846)): ?>
<?php $component = $__componentOriginal275950880bc546c65912d3d28527d846; ?>
<?php unset($__componentOriginal275950880bc546c65912d3d28527d846); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5e95fd19ec3bdbd14e5e65006596274a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e95fd19ec3bdbd14e5e65006596274a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal.create','data' => ['name' => 'create']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'create']); ?>
        <?php if (isset($component)) { $__componentOriginald04c8f854c7e36bc6248f014a620dea9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald04c8f854c7e36bc6248f014a620dea9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.input','data' => ['id' => 'f_name','name' => 'f_name','label' => 'نام','type' => 'text','wire:model' => 'f_name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'f_name','name' => 'f_name','label' => 'نام','type' => 'text','wire:model' => 'f_name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald04c8f854c7e36bc6248f014a620dea9)): ?>
<?php $attributes = $__attributesOriginald04c8f854c7e36bc6248f014a620dea9; ?>
<?php unset($__attributesOriginald04c8f854c7e36bc6248f014a620dea9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald04c8f854c7e36bc6248f014a620dea9)): ?>
<?php $component = $__componentOriginald04c8f854c7e36bc6248f014a620dea9; ?>
<?php unset($__componentOriginald04c8f854c7e36bc6248f014a620dea9); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginald04c8f854c7e36bc6248f014a620dea9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald04c8f854c7e36bc6248f014a620dea9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.input','data' => ['id' => 'l_name','name' => 'l_name','label' => 'نام خانوادگی','type' => 'text','wire:model' => 'l_name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'l_name','name' => 'l_name','label' => 'نام خانوادگی','type' => 'text','wire:model' => 'l_name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald04c8f854c7e36bc6248f014a620dea9)): ?>
<?php $attributes = $__attributesOriginald04c8f854c7e36bc6248f014a620dea9; ?>
<?php unset($__attributesOriginald04c8f854c7e36bc6248f014a620dea9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald04c8f854c7e36bc6248f014a620dea9)): ?>
<?php $component = $__componentOriginald04c8f854c7e36bc6248f014a620dea9; ?>
<?php unset($__componentOriginald04c8f854c7e36bc6248f014a620dea9); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginald04c8f854c7e36bc6248f014a620dea9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald04c8f854c7e36bc6248f014a620dea9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.input','data' => ['id' => 'mobile','name' => 'mobile','label' => 'موبایل','type' => 'text','wire:model' => 'mobile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'mobile','name' => 'mobile','label' => 'موبایل','type' => 'text','wire:model' => 'mobile']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald04c8f854c7e36bc6248f014a620dea9)): ?>
<?php $attributes = $__attributesOriginald04c8f854c7e36bc6248f014a620dea9; ?>
<?php unset($__attributesOriginald04c8f854c7e36bc6248f014a620dea9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald04c8f854c7e36bc6248f014a620dea9)): ?>
<?php $component = $__componentOriginald04c8f854c7e36bc6248f014a620dea9; ?>
<?php unset($__componentOriginald04c8f854c7e36bc6248f014a620dea9); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e95fd19ec3bdbd14e5e65006596274a)): ?>
<?php $attributes = $__attributesOriginal5e95fd19ec3bdbd14e5e65006596274a; ?>
<?php unset($__attributesOriginal5e95fd19ec3bdbd14e5e65006596274a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e95fd19ec3bdbd14e5e65006596274a)): ?>
<?php $component = $__componentOriginal5e95fd19ec3bdbd14e5e65006596274a; ?>
<?php unset($__componentOriginal5e95fd19ec3bdbd14e5e65006596274a); ?>
<?php endif; ?>
</div><?php /**PATH D:\xampp\htdocs\ghest\resources\views\livewire/customer/create.blade.php ENDPATH**/ ?>