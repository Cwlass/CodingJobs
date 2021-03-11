import { ComponentFixture, TestBed } from '@angular/core/testing';

import { JokeGenComponent } from './joke-gen.component';

describe('JokeGenComponent', () => {
  let component: JokeGenComponent;
  let fixture: ComponentFixture<JokeGenComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ JokeGenComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(JokeGenComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
