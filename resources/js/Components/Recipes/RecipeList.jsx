import React from 'react';

import RecipeItem from './RecipeItem'

const RecipeList = ({recipes}) => {
  return (
    <div className='py-4 px-10'>
      <div>
        {recipes.map((recipe) => {
          return(
            <RecipeItem
              key={recipe.uuid} 
              title={recipe.title}
              course="Main"
              duration={recipe.duration_minutes}
            />
          )
        })}
      </div>
    </div>
  );
}

export default RecipeList;