import React from 'react';

import RecipeItem from './RecipeItem'

const RecipeList = () => {
  return (
    <div className='py-4 px-10'>
      <RecipeItem 
        title="Sweet chili-tofu met rijst en cashewnoten"
        course="Main"
        duration="20"
      />
    </div>
  );
}

export default RecipeList;