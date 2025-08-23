<?php
/**
 * Template for displaying search forms
 *
 * @package KnockOut
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search-form-wrapper">
        <label class="search-label">
            <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'knockout'); ?></span>
            <input type="search" 
                   class="search-field" 
                   placeholder="<?php echo esc_attr_x('Search bowling, events, menu...', 'placeholder', 'knockout'); ?>" 
                   value="<?php echo get_search_query(); ?>" 
                   name="s" 
                   required />
        </label>
        <button type="submit" class="search-submit">
            <span class="search-icon">🔍</span>
            <span class="search-text"><?php echo _x('Search', 'submit button', 'knockout'); ?></span>
        </button>
    </div>
</form>

<style>
.search-form {
    max-width: 400px;
    margin: 0 auto;
}

.search-form-wrapper {
    display: flex;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 25px;
    overflow: hidden;
    border: 2px solid rgba(255, 215, 0, 0.3);
    transition: all 0.3s ease;
}

.search-form-wrapper:focus-within {
    border-color: #FFD700;
    box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.2);
}

.search-label {
    flex: 1;
}

.search-field {
    width: 100%;
    padding: 1rem 1.5rem;
    border: none;
    background: transparent;
    color: white;
    font-size: 1rem;
    outline: none;
}

.search-field::placeholder {
    color: rgba(255, 255, 255, 0.6);
}

.search-submit {
    padding: 1rem 1.5rem;
    background: linear-gradient(45deg, #FFD700, #FFA500);
    border: none;
    color: #2c3e50;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.search-submit:hover {
    background: linear-gradient(45deg, #FFA500, #FFD700);
    transform: scale(1.05);
}

.search-icon {
    font-size: 1.2rem;
}

.screen-reader-text {
    position: absolute !important;
    clip: rect(1px, 1px, 1px, 1px);
    width: 1px;
    height: 1px;
    overflow: hidden;
}

@media (max-width: 480px) {
    .search-text {
        display: none;
    }
    
    .search-submit {
        padding: 1rem;
    }
}
</style>