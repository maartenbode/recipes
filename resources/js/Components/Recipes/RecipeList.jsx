import React from 'react';
import RecipeItem from './RecipeItem'

const RecipeList = ({recipes}) => {
  return (
    <div className='py-8 px-10'>
      <div className='w-1/2'>
        <div className='bg-white rounded-lg drop-shadow-lg'>
          {recipes.map((recipe, index) => {
            return(
              <div className='flex flex-col'>
                <RecipeItem
                  key={recipe.uuid} 
                  title={recipe.title}
                  course="Main"
                  duration={recipe.duration_minutes}
                />
                <hr className={`${(index + 1 === recipes.length) ? "hidden" : "mx-4"}`} />
              </div>
            )
          })}
        </div>
      </div>
    </div>
  );
}

export default RecipeList;